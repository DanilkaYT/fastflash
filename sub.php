<?php
// Твой секретный ключ
$secret_key = "fastflash.shop";

// Проверяем, передан ли ключ в URL (например, sub.php?key=fastflash.shop)
if (!isset($_GET['key']) || $_GET['key'] !== $secret_key) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Denied"; // Вор увидит это
    exit;
}

// Если ключ верный — отдаем зашифрованную базу
header('Content-Type: text/plain; charset=utf-8');

$config = "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-usa-mega.gigatapbot.top:52444?encryption=none&security=reality&sni=pg-mega.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#%F0%9F%87%BA%F0%9F%87%B8%20-%20%E2%9C%85/14%20-%20GigaTap%20%F0%9F%94%AE
hysteria2://fddd8cbe-bd9b-4051-8c56-4932c0918fad@pg-usa-hy2.gigatapbot.top:1443?sni=pg-usa-hy2.gigatapbot.top&upmbps=100&downmbps=300#%F0%9F%87%BA%F0%9F%87%B8%20-%20%E2%9C%85/14%20-%20GigaTap%20HY2%20%F0%9F%94%AE
vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-de-bot.gigatapbot.top:52455?encryption=none&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#%F0%9F%87%A9%F0%9F%87%AA%E2%86%92%F0%9F%87%B3%F0%9F%87%B1%20-%20%E2%9C%85/14%20-%20GigaTap%20MH%20FIXED%20XHTTP%20%F0%9F%94%92
vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-ru-mh-v0.gigatapbot.top:52454?encryption=none&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#%F0%9F%87%B7%F0%9F%87%BA%20%F0%9F%8C%8D%20-%20%E2%9C%85/14%20-%20GigaTap%20MH%20%F0%9F%94%AE
trojan://V64xPDXwScVUGFUGNMO5ap-42zFyG-I4@pg-usa-bot.gigatapbot.top:3443?security=tls&sni=pg-usa-bot.gigatapbot.top&type=tcp#%F0%9F%87%BA%F0%9F%87%B8%20-%20%E2%9C%85/14%20-%20GigaTap%20Trojan%20TLS%20%F0%9F%9B%A1%EF%B8%8F
vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-sw-mega.gigatapbot.top:52444?encryption=none&security=reality&sni=pg-mega.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#%F0%9F%87%B8%F0%9F%87%AA%20-%20%E2%9C%85/14%20-%20GigaTap%20%F0%9F%94%AE
vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-ru-mh-v0-tcp.gigatapbot.top:47836?encryption=none&flow=xtls-rprx-vision&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=tcp&headerType=none#%F0%9F%87%B7%F0%9F%87%BA%E2%86%92%F0%9F%87%A9%F0%9F%87%AA%20MAIN%20-%20%E2%9C%85/14%20-%20GigaTap%20MH%20FIXED%20TCP%20%F0%9F%94%92";
echo base64_encode($config);
?>
