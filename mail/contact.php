<?php
if (empty($_POST)) {
	die();
}

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
	'secret' => "6LcnRIEpAAAAAMixreHm7rLP7-tEyVV-wppx1VH9", // change secret ket
	'response' => $_POST['token'],
	'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = array(
	'http' => array(
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$res = json_decode($response, true);

function clean($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	// $data = htmlspecialchars($data);
	return $data;
}

if ($res['success'] == true && $res['score'] >= 0.3) {

	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$email = clean($_POST['email']);
	$subject = clean($_POST['subject']);
	$message = clean($_POST['msg']);

	// Create the email and send the message
	$to = 'info@scootzrentals.com';

	$email_subject = "New Message from Scootz Mobility Scooter Rentals website";
	$email_body = "You have received a new message from Scootz Mobility Scooter Rentals Contact Form.\n\n" . "Here are the details:
\nName:  $fname $lname
Email: $email
Subject: $subject
Message: $message";

	$headers = 'From: noreply@scootzrentals.com';
	$success = mail($to, $email_subject, $email_body, $headers, "-f noreply@scootzrentals.com");
	if ($success) {
		$res['code'] = 200;
        echo json_encode($res);
        http_response_code(200);
    } else {
		$res['code'] = 500;
    	echo json_encode($res);
        http_response_code(500);
    }
} else {
	$res['code'] = 500;
    echo json_encode($res);
    http_response_code(500);
}

?>