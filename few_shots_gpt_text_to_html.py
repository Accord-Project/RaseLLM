from dotenv import load_dotenv, find_dotenv
from openai import OpenAI

_ = load_dotenv(find_dotenv())

context_prompt = open("Data/HTMLContext.txt", 'r', encoding='utf-8').read()
data_prompt = open("Data/HTMLData.txt", 'r', encoding='utf-8').read()
input_prompt = open("Data/text/BB100-Section4.txt", 'r', encoding='utf-8').read()
final_prompt = context_prompt + "\n\n" + data_prompt + "\n\n Now convert the following text into HTML format using the way in the examples shown above \n\n" + input_prompt

client = OpenAI()

whole_html = ""

for _ in range(3):

    response = client.chat.completions.create(
        model="gpt-4-1106-preview",
        temperature=0.7,
        messages= [{"role": "user", "content": f"{final_prompt}"}],
        stream=True
    )

    html_content = ""

    for chunk in response:
        if chunk is not None and chunk.choices[0].delta.content is not None:
            try:
                chunk_content = chunk.choices[0].delta.content
                html_content += chunk_content
                print(chunk_content, end="")
            except AttributeError:
                print("Warning: Missing content in chunk. Skipping...")

    whole_html += html_content

whole_html = whole_html.replace('```html', '')
whole_html = whole_html.replace('```', '')
whole_html = whole_html.replace("HTML Output", '')
with open("html_output.html", "w") as file:
    file.write(whole_html)
