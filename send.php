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

	try {
		$params = [
			'fullname' => $_POST['name'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'u' => 5,
			'f' => 5,
			's' => '',
			'c' => 0,
			'm' => 0,
			'act' => 'sub',
			'v' => 2,
		];
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL,
			"https://dreamtripsukrtd26.activehosted.com/proc.php?"
			. http_build_query($params)
			. "&jsonp=true");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_exec($curl);
		curl_close($curl);
	} catch (Exception $exception) {
	}

	mail($to, $subject, $message, $headers);
}

header('Location: /thanks.php');