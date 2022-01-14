<?php
session_start();

 include_once'DBH.Inc.php';
 $id = $_SESSION['email'];
 $sql="SELECT*FROM user WHERE email='$id'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck<1)
    {
        header("Location: login.php?error=mail");
    }
    else
    {
        if($row = mysqli_fetch_assoc($result))
        {
            if($row['test1'] == 'p')
            {
                header("Location: res2.php");
            }
            else
            {
                header("Location: res.php");
            }
        }
    }
?>
