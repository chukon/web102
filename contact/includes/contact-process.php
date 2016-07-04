<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/
require '../../vendor/autoload.php';
use Mailgun\Mailgun;

	//Put your email here
$to_email   	= "ckonkol@gmail.com"; //Recipient email, Replace with own email here

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';
$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);
$error = '';
// Check name
if(!$name)
{
$error .= 'Please enter your name.<br />';
}
// Check email
if(!$email)
{
$error .= 'Please enter an e-mail address.<br />';
}
if($email && !ValidateEmail($email))
{
$error .= 'Please enter a valid e-mail address.<br />';
}

// Check phone
if(!$phone)
{
$error .= 'Please enter a phone number.<br />';
}
if($phone && !ValidatePhone($phone))
{
$error .= 'Please enter a valid phone number. Format 000-000-0000<br />';
}

// Check message (length)

if(!$message || strlen($message) < 15)
{
$error .= "Please enter your message. It should have at least 15 characters.<br />";
}


if(!$error)
{
$mg = new Mailgun("key-9d9077232749460e4639d431e87f92ea");
$domain = "sandbox4658c33afd034ce49886e8bb15647d80.mailgun.org";

# Now, compose and send your message.
$mg->sendMessage($domain, array('from'    => $email, 
                                'to'      => $to_email . ";" . $email, 
                                'subject' => $subject, 
                                'text'    => "Full Name:" . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nMessage:" . $message));
 

if($mg)
{
echo 'success';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>