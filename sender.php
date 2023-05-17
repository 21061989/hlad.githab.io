<?php
    $name = $_POST['name'];    
	$phone = $_POST['phone'];
    $email = $_POST['email'];    

	$to = "itkse89@mail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n    
    Телефон: $phone /n
    Почта: $email"; 	
	mail($to, $subject, $msg, "From: $to");
?>
