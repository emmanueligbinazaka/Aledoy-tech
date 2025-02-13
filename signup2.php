<?php 

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!$name || !$lastname || !$phone || !$email || !$password)
{
    $msg = 'error';
    $comment = 'All fields are required';
    include('signup.php');
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $msg = 'error';
    $comment = 'Please enter a valid email';
    include('signup.php');
    exit;
}

if (strlen($phone) != 11) 
{
    $msg = 'error';
    $comment = 'Please enter valid number';
    include('signup.php');
    exit;
}

   $content = 'Firstname: '.$firstname."\n"
   .'Lastname : '.$lastname."\n"
   .'Phone : '.$phone."\n"
   .'Email : '.$email."\n"
   .'Password : '.$password."\n";

    $to = 'emmanueligbinazaka3@gmail.com';
    $sub = 'Practise Sign Up Form';
    $from = "From: noreply@aledoy.com";

mail($to,$sub,$content,$from);

$msg = 'success';
include('signup.php');

?>