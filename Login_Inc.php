<?php

session_start();

if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(empty( $email)||empty($password))
    {
        header("Location: login.php?error=data");
        exit();
    }
    else{
        $sql="SELECT*FROM user WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1)
        {
            //include("wrong_password.php");
            header("Location: login.php?error=mail");
        }
        else
        {
            if($row=mysqli_fetch_assoc($result))
            {
                //dehashing password
                if($row['test1'] == '' && $row['test2'] == '')
                {
                   header("Location: test.php"); 
                   exit();
                }
                else if($row['test1'] != '' && $row['test2'] == '')
                {
                    header("Location: test2.php");
                    exit();
                }
                else
                {
                    //login the user here
                    $_SESSION['id']=$row['id'];
                    $_SESSION['nick_name']=$row['nickname'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['password']=$row['password'];
                    $_SESSION['test1']=$row['test1'];
                    $_SESSION['test2']=$row['test2'];
                    $_SESSION['test3']=$row['test3'];
                     header("Location: admin/profile.php?login=success");
                     exit();
                }
            }
        }
    }
}
else{
     header("Location: login.php?error=veryerror");
}

?>