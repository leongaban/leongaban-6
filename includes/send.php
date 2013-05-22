<?php

$name = $_POST['name'];
$email = trim($_POST['email']);
$comments = $_POST['comments'];
$error = array();

$site_owners_email = 'leongaban@gmail.com'; // Replace this with your own email address
$site_owners_name = 'Leon Gaban'; // replace with your name

if (strlen($name) < 2) {
    $error['name'] = "Please enter your name.";    
}

if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
    $error['email'] = "Please enter a valid email address.";    
}

if (!$error) {
	$response = 'success';
	$subject  = $name . ' from LeonGaban.com';
    $body     = 'LeonGaban.com,' . "\n\nName: " . $name . 
                "\nEmail: " . $email . 
                "\nComments: " . $comments;
    
    require_once 'lib/swift_required.php';
    
    $transport = Swift_SmtpTransport::newInstance('leongaban.com', 25)
				->setUsername('leon@leongaban.com')
  				->setPassword('Gabandok712!');
       
    $mailer = Swift_Mailer::newInstance($transport);    
    
    $message = Swift_Message::newInstance();
	$message->setSubject($subject);
    $message->setFrom(array('leon@leongaban.com' => 'LeonGaban.com'));
    $message->setTo(array('leongaban@gmail.com' => 'Leon Gaban'));
	$message->setBody($body);

    $result = $mailer->send($message);
	
    echo $response;
	

} # end if no error
else {
	$response = 'error';
    
    echo $response;
} # end if there was an error sending
