<?php

session_start();

if(isset($_POST['submit']))
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
    $q10 = $_POST['ques10'];
    $q11 = $_POST['ques11'];
    $sum = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11;
    include_once'DBH.Inc.php';
    $id = $_SESSION['email'];
    if($sum >= 20)
    {
        
        $sql="update user SET test2 = 's' where email = '$id'";
        mysqli_query($conn,$sql);     
        header("Location: final.php");
    }
    else
    {
        $sql="update user SET test2 = 'f' where email = '$id'";
        mysqli_query($conn,$sql);     
        header("Location: final.php");
    }
    
}
else
{
    header("Location: sign-up.php");
}
?>