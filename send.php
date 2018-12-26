<?php
$to = 'sales@dreamtripsukraine.com';
$from = 'info@dreamtripsukraine.com';
$subject = 'Форма заявки DreamTrips';

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
	$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$_POST['name']}</h2>
        <p>Email: {$_POST['email']}</p>
        <p>Телефон: {$_POST['phone']}</p>";
	if (!empty($_POST['package'])) {
		$message .= "<br><p>Пакет: {$_POST['package']}</p>";
	}
	$message .= "------<br>Вебинар";
	$message .= "</body>
        </html>
    ";
	$headers = 'From: ' . $from . "\r\n" .
			   'Reply-To: ' . $_POST['email'] . "\r\n" .
			   'X-Mailer: PHP/' . phpversion();
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail($to, $subject, $message, $headers);
}

header('Location: /thanks.php');