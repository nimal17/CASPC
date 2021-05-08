<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['UName']) && isset($_POST['Email'])){
    $UserName = $_POST['UName'];
    $Subject = $_POST['Subject'];
    $Email = $_POST['Email'];
    $Msg = $_POST['msg'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    $mail=new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->UserName="miniprojectgrp10@gmail.com";
    $mail->Password='abc@pass123';
    $mail->Port=465;
    $mail->SMTPSecure="ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($Email,$UserName);
    $mail->addAddress("miniprojectgrp10@gmail.com");
    $mail->Subject=("$Email($Subject)");
    $mail->Body =$Msg;

    if($mail->send()){
        $status="success";
        $response="Email is sent!";

    }
    else{
        $status="failed";
        $response="Something is wrong : <br>".$mail->ErrorInfo;
    }
    exit(json_encode(array("status"=> $status,"response" =>$response)));

}
?>

  

 