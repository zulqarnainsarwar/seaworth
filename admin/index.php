
<?php
session_start();
error_reporting(0);
   $userprofile= $_SESSION['user_name'];
    if ($userprofile == true) {
       
    }
     else {
        header('Location: ../admin/pages/login.php');
    }

?> 

<?php include("header.php")?>

<?php include("menu.php")?>
 <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <?php 
        if(isset($_GET['req']) && $_GET['req'] == "addProduct"){
            include 'pages/add-product.php';
        } 
        elseif(isset($_GET['req']) && $_GET['req']  == "addcategories"){
            include 'pages/add-categories.php';

        }
        elseif(isset($_GET['req']) && $_GET['req'] == "dashboard"){
            include 'pages/dashboard.php';
        }
        elseif(isset($_GET['req']) && $_GET['req']  == "view"){
            include 'pages/view.php';
        }
       
        ?>
 
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php")?>