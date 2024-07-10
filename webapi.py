from flask import Flask, request, jsonify
import json
from flask_cors import CORS
from waitress import serve
from yaml_conversion_script import conv_txt_yaml

app = Flask(__name__)
CORS(app)

@app.route('/txt_to_yaml', methods=['POST'])
def upload_file():
    if 'file' not in request.files:
        return jsonify({'error': 'No file part'})

    file = request.files['file']

    if file.filename == '':
        return jsonify({'error': 'No selected file'})

    # Save the file to a desired location if needed
    file.save('data/text/' + file.filename)

    result = conv_txt_yaml("data/text/" + file.filename)

    return jsonify({'result': result})


if __name__ == '__main__':
    #app.run(host='0.0.0.0', port=5000)
    serve(app, port=5555)
