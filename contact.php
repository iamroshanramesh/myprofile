<?php

require_once "Mail.php";


$from = "iamroshanramesh@gmail.com";
$to = $_POST['email'];
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'iamroshanramesh@gmail.com';
$password = '****'; /* Password has been hidden for privacy concern */
$subject = "Thankyou for contacting Roshan";
$body = "Hey, Happy that you have contacted Roshan. He got your message. He will call/text you shortly";
$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
 array ('host' => $host,
   'port' => $port,
   'auth' => true,
   'username' => $username,
   'password' => $password));
$mail = $smtp->send($to, $headers, $body);


$from2 = "iamroshanramesh@gmail.com";
$to2 = "iamroshanramesh@gmail.com";
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'iamroshanramesh@gmail.com';
$password = '****'; /* Password has been hidden for privacy concern */
$subject2 = 'New Message';
$body2 = $_POST['message'];
$headers2 = array ('From' => $from2, 'To' => $to2,'Subject' => $subject2);
$smtp = Mail::factory('smtp',
 array ('host' => $host,
   'port' => $port,
   'auth' => true,
   'username' => $username,
   'password' => $password));
$mail = $smtp->send($to2, $headers2, $body2);






if (PEAR::isError($mail)) {
 echo($mail->getMessage());
} else {
 echo("Message successfully sent!\n");
}

?>
