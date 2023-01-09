<?php

$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smpt.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username = "seeram87@gmail.com";
    $mail->Password = "vbmktojpvvvithbj";

    $mail->setForm('seeram87@gmail.com',$POST['name']);
    $mail->addAddress('arjunreddyseeram87@gmail.com');
    $mail->addReplyTo('seeram87@gmail.com',$POST['name']);

    $mail->isHTML(true);
    $mail->Subject="Lovely Wishes From ".$POST['name'];
    $mail->Body= "<h1 align=center : ".$_POST['name']."<br> Email : ".$_POST['message']."</h1>";


    if(!$mail->send()){
        $result="Something Went Worng, Please Try Again";
    }
    else{
        $result="Thanks ".$_POST['name']." For Your Warm Wishes. Se You Soon";
    }
}

?>