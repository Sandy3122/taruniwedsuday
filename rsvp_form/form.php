<?php

$result="";
if(isset($_POST['submit'])){
    require '/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smpt.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='taruniwedsuday@gmail.com';
    $mail->Password='ypiptuejngjrmyhr';

    $mail->setForm($_POST['name'],$POST['name']);
    $mail->addAddress('seeram87@gmail.com');
    $mail->addReplyTo($_POST['name'],$POST['name']);

    $mail->isHTML(true);
    $mail->Subject="Form Submission : ".$_POST['message'];
    $mail->Body='<h1 align=center : '.$_POST['name'].'<br> Email : '.$_POST['message'].'</h1>';


    if(!$mail->send()){
        $result="Something Went Worng, Please Try Again";
    }
    else{
        $result="Thanks ".$_POST['name']."For Your Warm Wishes. Se You Soon";
    }
}

?>
