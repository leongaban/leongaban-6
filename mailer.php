<?php
/* Set e-mail recipient */
$myemail = "leongaban@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
// $subject = check_input($_POST['subject'], "Enter a subject");
$subject = "Email from LeonGaban.com";
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Name: $name
E-mail: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks_contact.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>

<html>
<head>
	<title>Leon Gaban | Contact Error Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is an error page">
    <meta name="author" content="Leon Gaban">

    <link rel="shortcut icon" href="http://leongaban.com/favicon.ico">
    <link rel="apple-touch-icon" href="http://leongaban.com/apple-touch-icon.png">
	<link href="http://fonts.googleapis.com/css?family=Bitter:400,700,400italic" rel="stylesheet" type="text/css" >
    <link href="css/style.css" type="text/css" rel="stylesheet" >
    <script src="/mint/?js" type="text/javascript"></script>
</head>

<body>

	<div class="outer">

        <div class="inner">

            <div class="video-div">
                <video width="100%" height="100%" autoplay="autoplay" loop="loop" preload>
                    <source src="videos/clouds.mp4" type="video/mp4" >
                    <source src="videos/clouds.ogg" type="video/ogg" >
                    <source src="videos/clouds.webm" type="video/webm" >
                    <object data="videos/clouds.mp4" width="100%" height="100%">
                        <param name="wmode" value="transparent">
                        <param name="autoplay" value="true" >
                        <param name="loop" value="true" >
                        <embed src="videos/clouds.swf" width="100%" height="100%" wmode="transparent" >
                    </object>
                </video>
            </div>
        </div><!-- inner -->

        <div class="inner-mobile">
            <div class="pattern-home"></div>
        </div>

        <header id="main-header">

            <div id="main-nav">
                <ul>
                    <li><a href="http://leongaban.com#portfolio">Portfolio</a></li>
                    <li><a href="http://leongaban.com#footer">Contact</a></li>
                    <li><a href="http://careers.stackoverflow.com/leongaban" target="_blank">Resume</a></li>
                </ul>
            </div>

            <div id="logo-title">
                <img src="images/error.gif" width="256" height="256" class="avatar" />

                <h1>Whoops!</h1>
                <h2>Please correct the following error:</h2>
                <h3><?php echo $myError; ?></h3>
                <h3>Hit the back button and try again</h3>
            </div>

        </header>

    </div><!-- .outer -->

<!-- Google Analytics -->
<script src="js/googleanalytics.js"></script>

</body>
</html>

<?php
exit();
}
?>