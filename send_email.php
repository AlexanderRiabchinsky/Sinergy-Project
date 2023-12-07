
<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$content = "<!DOCTYPE html> 
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <div class='gen container' style='height: 100%'>
    <a style='position: absolute; top: 50%; left: 10%; font-size: 20px' 
    href='index.html'>Спасибо за ваше письмо. Чтобы вернуться на первоначальную страницу, кликните по этому тексту.</a>
    </div>
</body>
</html>
";
echo $content;

$to = 'rialex@rambler.ru';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = "Получено новое сообщение:
Имя: $name
Содержание: "
. $_POST['message'];
$headers = "From: $email
";
$headers .= "Reply-To: $email
";
$headers .= "X-Mailer: PHP/" . phpversion();

// $mail_result = 
mail($to, $subject, $message, $headers);

// if ($mail_result) {
// echo 'Письмо успешно отправлено.';
// } else {
// echo 'Ошибка при отправке письма.';
// }
?>