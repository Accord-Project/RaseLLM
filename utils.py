# One token is equal to 4 characters
import math


def extract_text_between(text, start_token, end_token=""):
    """
    Extracts the string between two tokens in a string.

    Args:
        text: The input string.
        start_token: The starting token (inclusive).
        end_token: The ending token (exclusive).

    Returns:
        The string between the tokens, or None if not found.
    """
    start = text.find(start_token)
    if start == -1:
        return None  # Token not found
    end = None
    if len(end_token) > 0:
        end = text.find(end_token, start + len(start_token))

    if end == -1:
        return None  # Ending token not found after starting token
    return text[start + len(start_token):end]


def calculate_token_estimate(data: str, token_unit=4) -> int:
    """
    Returns an estimate for the specified data.
    Args:
        data: The input/output data
        token_unit: The number of characters that make up a token defaults to
        4 characters representing a token based on OpenAI specifications
    Returns:
        The integer estimate of tokens
    """
    return math.ceil(len(data) / 4)


def get_incremental_prompt_context(input_data: str, token_limit=128000) -> list[str]:
    """
    Breaks context into a list of chunks
    Args:
        input_data: The input data
        token_limit: The maximum number of tokens in each generated context chunk
    Returns:
        A list of chunks with each chunk having tokens less or equal to the token limit
    """
    context_chunks = []
    total_length = 0
    input_length = len(input_data)
    while total_length < input_length:
        chunk = input_data[0: (token_limit * 4)]  # 1 token represents 4 chars
        context_chunks.append(chunk)
        chunk_length = len(chunk)
        total_length += chunk_length
        input_data = input_data[chunk_length:]
    return context_chunks


def save_yaml_output(yaml_text: str, filename: str = "output"):
    yaml_text = yaml_text.replace('```yaml', '')
    yaml_text = yaml_text.replace('```', '')
    yaml_text = yaml_text.replace("YAML Output", '')
    with open(f"{filename}.yaml", "w") as file:
        file.write(yaml_text)


def extract_content_from_chunks(response, print_stream=True) -> str:
    """
    Extracts the value response from the OpenAI completion response stream
    :param response: The response stream object
    :param print_stream: Specifies if each stream chunk
    :return: A combined string for the OpenAI model output
    """
    content = ""
    total_tokens = 0
    for chunk in response:
        if chunk is not None and chunk.choices[0].delta.content is not None:
            try:
                buffer = chunk.choices[0].delta.content
                content += buffer
                if print_stream:
                    print(buffer, end="")
            except AttributeError:
                print("Warning: Missing content in chunk. Skipping...")
    return content
