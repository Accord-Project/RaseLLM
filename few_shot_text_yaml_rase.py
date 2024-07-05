from dotenv import load_dotenv, find_dotenv
from openai import OpenAI

_ = load_dotenv(find_dotenv())

context_prompt = open("Data/Context.txt", 'r', encoding='utf-8').read()
data_prompt = open("Data/Data.txt", 'r', encoding='utf-8').read()
input_prompt = open("Data/text/BB100-Section4.txt", 'r', encoding='utf-8').read()
final_prompt = context_prompt + "\n\n" + data_prompt + "\n\n Now convert the following text into YAML format using the way in the examples shown above \n\n" + input_prompt

client = OpenAI()

whole_yaml = ""

for x in range(10):
    if x == 0:
        response = client.chat.completions.create(
            model="gpt-4-1106-preview",
            temperature=0.7,
            messages= [{"role": "user", "content": f"{final_prompt}"}],
            stream=True
        )
    else:
        response = client.chat.completions.create(
            model="gpt-4-1106-preview",
            temperature=0.7,
            messages=[{"role": "user", "content": f"This is part of the generated output:\n{whole_yaml}\n continue please"}],
            stream=True
        )

    yaml_content = ""

    for chunk in response:
        if chunk is not None and chunk.choices[0].delta.content is not None:
            try:
                chunk_content = chunk.choices[0].delta.content
                yaml_content += chunk_content
                print(chunk_content, end="")
            except AttributeError:
                print("Warning: Missing content in chunk. Skipping...")

    whole_yaml += yaml_content
    if "#end#" in yaml_content:
        x = 11
        break
    #final_prompt = final_prompt + "\n This is part of the output \n" + whole_yaml + "\n Now, complete generating the remaining part of the YAML"

whole_yaml = whole_yaml.replace('```yaml', '')
whole_yaml = whole_yaml.replace('```', '')
whole_yaml = whole_yaml.replace("YAML Output", '')
with open("output.yaml", "w") as file:
    file.write(whole_yaml)
