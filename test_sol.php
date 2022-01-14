<?php

session_start();

if(isset($_POST['next']))
{
    
    $q1 = $_POST['ques1'];
    $q2 = $_POST['ques2'];
    $q3 = $_POST['ques3'];
    $q4 = $_POST['ques4'];
    $q5 = $_POST['ques5'];
    $q6 = $_POST['ques6'];
    $q7 = $_POST['ques7'];
    $q8 = $_POST['ques8'];
    $q9 = $_POST['ques9'];
    $sum = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;
    include_once'DBH.Inc.php';
    $id = $_SESSION['email'];
    if($sum <=10)
    {
        
        $sql="update user SET test1 = 'p' where email = '$id'";
        mysqli_query($conn,$sql);     
        header("Location: test2.php");
    }
    else
    {
        $sql="update user SET test1 = 'n' where email = '$id'";
        mysqli_query($conn,$sql);     
        header("Location: test2.php");
    }
    
}
else
{
    header("Location: sign-up.php");
}
?>