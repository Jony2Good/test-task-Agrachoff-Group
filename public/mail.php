<?php

if (isset($_POST['email']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = "Тестовое письмо";
    $message = 'Привет!';
    $headers = [
        "From" => "ct77688-wordpress-c7iyz.tw1.ru",
        "Reply-To" => "ct77688-wordpress-c7iyz.tw1.ru",
        "X-Mailer" => "PHP/" . phpversion(),
    ];
    mail($mail, $subject, $message, $headers);
}