<?php
if(isset($_POST['send'])){
     $from =  $_POST['femail'];
     $phoneno = $_POST['phoneno'];
     $message = $_POST['message'];
     $carrier = $_POST['carrier'];
     if(empty($from)){
       echo("enter the email");
       exit();

     } 
else if(empty($phoneno)){
   echo("enter the phone no");
     exit();
   }
 elseif(empty($carrier)){
   echo("enter the specific carrier");
   exit();
    }
 else if(empty($message)){
  echo("enter the message");
  exit();
  }
  else{
     $message = wordwrap($message, 70);
     $header = $from;
     $subject = 'from submission';
     $to = $phoneno.'@'.$carrier;
     $result = mail($to, $subject, $message, $header);
     echo("message sent to".$to);

  }

  }
?>