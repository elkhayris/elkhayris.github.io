<?php
if (isset($_POST['submit'])){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    
    $myMail = "sal@honeybee24.com";
    $head =   "From: ".$email;
    $message2 = "You have received a message from ". $name . ".\n\n" . $message;

    // 1. E-mail to which you are sending
    // 2. Subject
    // 3. Message
    mail($myMail, $subject,$message2, $head);
}

?>