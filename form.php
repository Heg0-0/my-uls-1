<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$selectedService = $_POST['services'];  // Новая строка для получения выбранной услуги

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$selectedService = htmlspecialchars($selectedService);  // Новая строка для санитизации выбранной услуги

$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$message = urldecode($message);
$selectedService = urldecode($selectedService);  // Новая строка для декодирования выбранной услуги

$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$message = trim($message);
$selectedService = trim($selectedService);  // Новая строка для удаления лишних пробелов в выбранной услуге

$to = "vladonischukan@gmail.com";
$subject = "Новое письмо с сайта";
$headers = "From: $email \r\n";

if (mail($to, $subject, 
    "Имя: $name\n".
    "Телефон: $phone\n". 
    "Email: $email\n". 
    "Комментарий: $message\n".
    "Выбранный сервис: $selectedService\n",  // Новая строка для включения выбранной услуги в письмо
    $headers)
) {
    echo('Письмо отправлено!');
} else {
    echo('Ошибка при отправке письма!');
}
?>
