<?php
    
    $email_to =   'comercial@riolider.com.br'; 
    $name     =   $_POST['name'];  
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
   
     if(mail($email_to, $subject, $message, $headers)){
        echo 'sent';      
    }else{
        echo 'failed';    
    }
?>