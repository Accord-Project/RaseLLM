from dotenv import load_dotenv, find_dotenv
from openai import OpenAI

_ = load_dotenv(find_dotenv())

client = OpenAI()

completion = client.chat.completions.create(
  model="ft:gpt-3.5-turbo-1106:birmingham-city-university::8yjDCRhA",
  messages=[
    {"role": "system", "content": "You are a helpful SQL assistant."},
    {"role": "user", "content": "Show the net sales of 2022"}
  ]
)
print(completion.choices[0].message)