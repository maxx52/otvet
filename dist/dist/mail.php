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

// Установка постоянного отправителя (вместо динамического From)
$from_address = 'no-reply@ano-otvet.ru';

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

// Определяем постоянные headers (не допускаем произвольные от пользователей)
$headers = "From: $from_address\r\n";
$headers .= "Reply-To: $email\r\n";

// Проверка успешного отправления письма
if (mail($to, $subject, $message, $headers)) {
    echo 'Письмо отправлено успешно!';
} else {
    error_log('Ошибка при отправке письма: ' . error_get_last()['message']); // Записываем в лог ошибки
    echo 'Ошибка при отправке письма.';
}
?>