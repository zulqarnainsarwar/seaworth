<?php include("header.php")?>

    <?php include("menu.php")?>
     <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <?php 
            if(isset($_GET['req']) && $_GET['req'] == "addProduct"){
                include 'pages/add-product.php';
            } elseif(isset($_GET['req']) && $_GET['req'] == "dashboard"){
                include 'pages/dashboard.php';
            }
            elseif(isset($_GET['req']) && $_GET['req']  == "viewProducts"){
                include 'pages/view.php';
            }
            ?>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
               <?php include("footer.php")?>