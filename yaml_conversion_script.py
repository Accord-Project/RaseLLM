from dotenv import load_dotenv, find_dotenv
from openai import OpenAI

from utils import extract_content_from_chunks, save_yaml_output, get_incremental_prompt_context, extract_text_between

load_dotenv(find_dotenv('.env'))

# Initialize openAI client
client = OpenAI()


def get_completion(prompt: str, model_context: str = None, model: str = "gpt-4o"):
    """
    Utility Function for executing generative prompt requests

    Args:
        prompt: User prompt
        model_context: Model Behavior Instruction
        model: OpenAI model in use
    Returns:
        A response stream for the
    """
    messages = [{"role": "user", "content": prompt}]
    if model_context is not None and len(model_context) > 0:
        messages.insert(0, {
            "role": "system",
            "content": model_context
        })

    return client.chat.completions.create(
        model=model,
        temperature=0.7,
        messages=messages,
        stream=True
    )


def conv_txt_yaml(txt_file):
    """
    Uses only the last chunk of character range
     from the previous yaml output as context window to continue with generation
    """
    # Load Prompt Data
    context_prompt = open("data/Context.txt", 'r', encoding='utf-8').read()
    data_prompt = open("data/Data.txt", 'r', encoding='utf-8').read()
    input_prompt = open("data/text/" + txt_file, 'r', encoding='utf-8').read()

    few_shot_context_prompt = f"""{context_prompt} \n{data_prompt}\n"""

    initial_prompt = f"""Now convert the following text into YAML format using the way in the examples shown above
                    \n{input_prompt}"""
    whole_yaml = ""
    iteration = 0
    while True and iteration < 5:
        if iteration == 0:
            response = get_completion(prompt=initial_prompt, model_context=few_shot_context_prompt)
        else:
            yaml_chunks = get_incremental_prompt_context(whole_yaml, token_limit=1000)  # Approximately 4000 characters
            chunk_length = len(yaml_chunks)
            if chunk_length > 1:
                prompt_text = ""
                for index, chunk in enumerate(yaml_chunks):
                    is_last_index = index == chunk_length - 1
                    if is_last_index:
                        prompt_text = f"""This is the last part of the previously generated yaml which may be 
                        incomplete :\n{chunk}\n 
                        continue the file generation based on the initial process"""
                response = get_completion(prompt_text)
            else:
                response = get_completion(f"This is part of the generated output:\n{whole_yaml}\n continue please")

        yaml_content = extract_content_from_chunks(response)
        yaml_content = extract_text_between(yaml_content,
                                            "```yaml" if '```yaml' in yaml_content else "```",
                                            "```" if iteration > 0 else "")

        whole_yaml += yaml_content
        iteration += 1
        print(f"Iteration: {iteration}")
        print(f"\n\nContext token estimate for iteration {iteration}>>>: {len(whole_yaml) / 4}\n")

        if "#end#" in yaml_content:
            print("Yaml fully generated!")
            break
    save_yaml_output(whole_yaml, txt_file + ".yaml")
    return "Finshed"

