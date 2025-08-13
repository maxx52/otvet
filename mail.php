<?php
session_start();

// Проверка CSRF-токена
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo 'Ошибка CSRF.';
    exit;
}

// Валидация данных
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
$ward_name = filter_var($_POST['ward_name'], FILTER_SANITIZE_STRING);
$ward_birthdate = filter_var($_POST['ward_birthdate'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$help_needed = filter_var($_POST['help_needed'], FILTER_SANITIZE_STRING);

// Дополнительная валидация
if (!$email) {
    echo 'Некорректный email.';
    exit;
}

if (!preg_match('/^\+7\d{10}$/', $phone)) {
    echo 'Некорректный номер телефона.';
    exit;
}

if (!preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $ward_birthdate)) {
    echo 'Некорректная дата рождения.';
    exit;
}

// Отправка письма
$to = 'gospelwork@yandex.ru';
$subject = 'Запрос на помощь от ' . $name;
$message = "Имя: $name\n";
$message .= "Статус: $status\n";
$message .= "ФИО подопечного: $ward_name\n";
$message .= "Дата рождения подопечного: $ward_birthdate\n";
$message .= "Email: $email\n";
$message .= "Телефон: $phone\n";
$message .= "Город: $city\n";
$message .= "Необходимая помощь: $help_needed\n";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Письмо отправлено успешно!';
} else {
    echo 'Ошибка при отправке письма.';
}
?>