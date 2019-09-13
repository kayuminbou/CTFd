<?php
session_start();
session_regenerate_id(true);

if(isset($_SESSION['admin'])==true && $_SESSION['admin']==1 && $_GET['password']!=""){
    $new_pass=$_GET["password"];
    $password_file="d027ac1d8b34c6a0c62f52ef1c84e2d5";
    file_put_contents($password_file, $new_pass, LOCK_EX);
    header('Location: signout.php');
}else{
    header('Location: member.php');
}
?>