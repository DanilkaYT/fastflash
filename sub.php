<?php
// 1. Твой секретный ключ
$secret_key = "fastflash.shop";

// 2. Проверяем ключ
if (!isset($_GET['key']) || $_GET['key'] !== $secret_key) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Denied";
    exit;
}

// 3. Получаем имя пользователя
$user_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Клиент";

// 4. Формируем заголовки для Happ
// Profile-Title: Название всей подписки
// Subscription-Userinfo: имя и доп. инфо (опционально)
header("Profile-Title: FastFlash | $user_name");
header("Subscription-Userinfo: name=$user_name; status=active");
header('Content-Type: text/plain; charset=utf-8');

// 5. Твои серверы
$servers = [
    "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-usa-mega.gigatapbot.top:52444?encryption=none&security=reality&sni=pg-mega.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#🇺🇸 VLESS | fastflash.shop | $user_name",
    "hysteria2://fddd8cbe-bd9b-4051-8c56-4932c0918fad@pg-usa-hy2.gigatapbot.top:1443?sni=pg-usa-hy2.gigatapbot.top&upmbps=100&downmbps=300#🇺🇸 HYSTERIA2 | fastflash.shop | $user_name",
    "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-de-bot.gigatapbot.top:52455?encryption=none&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#🇩🇪 VLESS | fastflash.shop | $user_name",
    "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-ru-mh-v0.gigatapbot.top:52454?encryption=none&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#🇷🇺 VLESS | fastflash.shop | $user_name",
    "trojan://V64xPDXwScVUGFUGNMO5ap-42zFyG-I4@pg-usa-bot.gigatapbot.top:3443?security=tls&sni=pg-usa-bot.gigatapbot.top&type=tcp#🇺🇸 TROJAN | fastflash.shop | $user_name",
    "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-sw-mega.gigatapbot.top:52444?encryption=none&security=reality&sni=pg-mega.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=xhttp&mode=auto&path=%2F#🇸🇪 VLESS | fastflash.shop | $user_name",
    "vless://7170d37a-0d05-486b-b2cd-57f0ef7ef55e@pg-ru-mh-v0-tcp.gigatapbot.top:47836?encryption=none&flow=xtls-rprx-vision&security=reality&sni=pg-bot.gigatapbot.top&fp=chrome&pbk=VWhynxStqii0ll4ttnUJWG4Qy9dJFXhZu6Y8OiIO5Vk&sid=c577182abe08e64c&type=tcp&headerType=none#🇷🇺 VLESS TCP | fastflash.shop | $user_name"
];

// 6. Склеиваем и кодируем
$final_config = implode("\n", $servers);
echo base64_encode($final_config);
?>
