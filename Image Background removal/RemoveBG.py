# Requires "requests" to be installed (see python-requests.org)
import requests

response = requests.post(
    'https://api.remove.bg/v1.0/removebg',
    files={'image_file': open('(Image Path)', 'rb')},
    data={'size': 'auto'},
    headers={'X-Api-Key': 'ivB2XBqXxUu4ekNmyjWC4uHn'},
)
if response.status_code == requests.codes.ok:
    with open('(Output Image Name).png', 'wb') as out:
        out.write(response.content)
else:
    print("Error:", response.status_code, response.text)
