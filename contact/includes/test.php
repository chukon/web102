<?php
require '../../vendor/autoload.php';
use Mailgun\Mailgun;

//include dirname(dirname(__FILE__)).'/config.php';

	//Put your email here
$to_email   	= "s0066579@student.rockvalleycollege.edu"; //Recipient email, Replace with own email here

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
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

// Check message (length)

if(!$message || strlen($message) < 15)
{
$error .= "Please enter your message. It should have at least 15 characters.<br />";
}


if(!$error)
{

    
$mg = new Mailgun("key-74d697ddd6c4f0541c451696ad1bb869");  //Your MailGun Key
$domain = "sandbox5ff06050f7a64592b6e69ec2eccda282.mailgun.org"; //Your MailGun SandBox URL

# Now, compose and send your message.
$mg->sendMessage($domain, array('from'    => $email, 
                                'to'      => $to_email, 
                                'subject' => $subject, 
                                'text'    => $message));


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