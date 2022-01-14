<?php

include "includes/admin_header.php"
?>

    <div id="wrapper">
    
        
        <?php include "includes/admin_nav.php" ?>
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            اهلا بك فى صفحة التعلم الخاصه بك
                            <small> <?php echo $_SESSION['name'];?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">الصفحة الرئيسية</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="page-header">
                             <span style="color:blue;">الاسم :</span><?php echo $_SESSION['name'];?>
                        </h3>
                        <h3 class="page-header">
                            <span style="color:blue;">البريد الالكترونى :</span><?php echo $_SESSION['email'];?>
                        </h3>
                        <h3 class="page-header">
                            <span style="color:blue;">المستوى :</span><?php
                                if($_SESSION['test1']=='n')
                                {
                                    echo "مبتدئ";
                                }
                                else
                                {
                                    echo "محترف";
                                }
                            ?>
                        </h3>
                        <h3 class="page-header">
                            <span style="color:blue;">طريقة التعلم :</span><?php
                                if($_SESSION['test2']=='s')
                                {
                                    echo "تعليق توضيحى";
                                }
                                else
                                {
                                    echo "توجيه مباشر";
                                }
                            ?>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>