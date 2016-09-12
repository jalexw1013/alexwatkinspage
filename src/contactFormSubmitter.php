<?php
/*
 * This Section contains methods designed to support this script.
 */
 
 /*
This file except where otherwise noted is copyright by Alex Watkins.
*/

/* 
    Created on : October 30, 2015, 4:13:38 PM
    Author     : Alex Watkins
*/

/* the following script takes in get variables corresponding to a name, email, and message to be passed on to the spceified email. */
 
function sendMessage($name, $email, $newMessage) {
    $to = "jalexw1013@gmail.com";
    $subject = "New Message From Website";

    $message = '
    <html>
    <head>
    <title>New Message From Website</title>
    </head>
    <body>
    <p>Name: '.$name.'</p>
    <p>Email: '.$email.'</p>
    <p>Message: '.$newMessage.'</p>
    </body>
    </html>
    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";

    mail($to,$subject,$message,$headers);
}

 /*
 * Begin the actual script
 */

//echo loading
echo 'Sending Message...';

//gather get variables
$enteredName = $_GET['name'];
$enteredEmail = $_GET['email'];
$enteredMessage = $_GET['message'];

//send email
sendMessage($enteredName, $enteredEmail, $enteredMessage);

echo '<br />Message Sent.';