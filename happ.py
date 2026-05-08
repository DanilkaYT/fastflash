import requests

def get_crypt5_link(original_url):
    api_url = "https://crypto.happ.su/api-v2.php"
    payload = {"url": original_url}
    response = requests.post(api_url, json=payload)
    if response.status_code == 200:
        return response.json() # Вернет зашифрованную ссылку
    return None

# Использование
print(get_crypt5_link("https://fastflash.shop/sub.txt"))
