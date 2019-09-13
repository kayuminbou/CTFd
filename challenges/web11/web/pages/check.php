<?php

$userid=$_POST["userid"];
$password=$_POST["password"];

$password_file="d027ac1d8b34c6a0c62f52ef1c84e2d5";
$admin_pass = file_get_contents($password_file);

if($userid=="admin" && $password==$admin_pass){
    session_start();
    session_regenerate_id(true);
    $_SESSION['admin']=1;
    header('Location: member.php');
}else{
    header('Location: signout.php');
}


?>