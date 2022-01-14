<?php

session_start();

if(isset($_POST['next']))
{
    $_SESSION['email'] = $_POST['email'];
    include_once'DBH.Inc.php';
    $nick_name= mysqli_real_escape_string($conn,$_POST['nickname']);
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $password= mysqli_real_escape_string($conn,$_POST['password']);
    
     $sql2="SELECT*FROM user WHERE email='$email'";
     $result= mysqli_query($conn,$sql2);
     $resultCheck = mysqli_num_rows($result);
     if($resultCheck > 0)
     {
         header("Location: sign-up.php?test=usertaken");
         exit();
     }
    else
    {
        //Insert user into database
        $sql="INSERT INTO user(nickname,name,email,password) VALUES('$nick_name','$name','$email','$password');";
        mysqli_query($conn,$sql);
        header("Location: test.php?sign-up=success");
        exit();
    }
}
else
{
    header("Location: sign-up.php");
}