<?php
include_once 'setup.php';

$error = 0;
$msg = '';

$name = clean ('name');
$email = clean ('email');
$phone = clean ('phone');
$password = clean ('password');
$c_password = clean ('c_password');


$msg = '';
$err = 0;
if ($name == '' || $email == '' || $password == '' || $c_password =='' || $phone == '') {
    $err = 1;
    $msg .= " Please fill all fields <br>";
}

$exist = $con->query("SELECT * from users WHERE email = '$email' ");
if ($exist->num_rows>0) {
    $err = 1;
    $msg = 'Email already in use';
}

if ($password != $c_password) {
    $err = 1;
    $msg .= " <br>Passwords do not match";
}

$password = sha1(md5($password));


if ($err == 0){
    $insert = $con->query(" INSERT into users (name, email, phone, password) 
    VALUES('$name', '$email', '$phone', '$password')");
    if($insert == true){
        
        // log in user here */
       $msg .='Registration Successful';
       header("location:login.php?msg=Registration Successfuled" );
    }
  
}
else {
    $err=1;
    echo $msg;
    echo $con->error;
    die('here');

} 
header("location:login.php?msg= Registration Successful" );



?>