<?php

$name = $_GET['name'];
$email_address = $_GET['email'];
$subject = $_GET['subject'];
$message = $_GET['message'];

$email_content = "
               <html>
                   <head>
                       <title>Big Dough Sweepstakes</title>
                   </head>
                   <body>
                       <div style='text-align:center; background-color: #000000; padding-bottom:5px; color:#ffffff;'>
                           <h1> Durrell Lyons Performs </h1>
                           <h2> Message From: <br> " . $name .  "</h2>
                       </div>
                       <div>
                           <p style='text-align:center; font-size:18px; '>"
                           . $message .
                           "</p>
                       </div>
                       <div style='text-align:center;
                            background-color: #000000;
                            padding-bottom:5px; color:#ffffff;
                            text-align:center;'>
                           &copy; Copyright 2015
                       </div>
                   </body>
               </html>
                    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email_address . "\r\n";
    $mail_confirmation = mail("durrell@durrelllyonsperforms.com",$subject,$email_content,$headers);
    
    if($mail_confirmation){
      //echo "Yup";
      $confirmation = "Your Message Has Been Sent" ;
    }
    else {
      //echo "No";
      $confirmation = "Your Message Could Not Be Sent";
    }
    
    header("Location:/?confirmation=$confirmation");

?>