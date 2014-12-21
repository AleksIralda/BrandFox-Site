<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $message  = $_POST['text'];
    $website  = $_POST['website'];
    $select  = $_POST['project'];
    $headers = "Email \r\n".$email."\r\n\r\nName \r\n".$name."\r\n\r\nWebsite \r\n".$website."\r\n\r\nProject \r\n".$select;
    
    //send email   
    mail("info@brandfox.com.mx", "Nuevo Contacto", $message, $headers);
}

?>