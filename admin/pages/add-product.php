<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>Add Products Here!</h1>
            <!-- basic form  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Select Product To Store Data</label>
                                    <!-- <input type="text" class="form-control" placeholder="Select Item" list="category"> -->

                                    <select name="cat_id">
                                        <?php
                                        $query = "SELECT id,name from categories";
                                        $data = mysqli_query($conn, $query);
                                        echo $query . "<br>";
                                        while ($result = mysqli_fetch_array($data)) {
                                            echo '<option value="' . $result['id'] . '">' . $result['name'] . '</option>';
                                        }
                                        ?>
                                    </select>

                                    <?php
                                    //    $query = "SELECT * FROM `categories`";
                                    // $query = "SELECT DISTINCT cat_name from 'product'";
                                    //   $data = mysqli_query($conn, $query);
                                    //   $display = mysqli_num_rows($data);
                                    //   if ($display > 0) {
                                    //     while ($result = mysqli_fetch_array($data)) {
                                    //    ?>


                                </div>
                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Product ID</label>
                                    <input id="inputText3" name="product_id" type="text" class="form-control"
                                           placeholder="Product ID">
                                </div>
                                <div class="form-group">
                                    <label for="inputText4" class="col-form-label">Product Name</label>
                                    <input id="inputText4" name="product_name" type="text" class="form-control"
                                           placeholder="Product Name">
                                </div>
                                <div class="custom-file mb-3">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="product_image" id="product_image" value=""/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                    <textarea class="form-control" name="product_description"
                                              id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit"/>
                                </div>
                            </form>
                            <?php
                            if ($_POST['submit']) {
                                $id = $_POST['id'];
                                $pid = $_POST['product_id'];
                                $pname = $_POST['product_name'];
                                // $pimg = $_POST['product_image'];
                                $pimg = $_FILES["product_image"]["name"];
                                $tempname = $_FILES["product_image"]["tmp_name"];
                                $folder = "../assets/images/img-grid/" . $pimg;
                                move_uploaded_file($tempname, $folder);
                                $pdescp = $_POST['product_description'];
                                $cat = $_POST['cat_id'];
                                if ($pid != "" && $pname != "" && $pimg != "" && $pdescp != "" && $cat) {
                                    $query = "INSERT INTO product(product_id, product_name, product_image, product_description, cat_id) 
                                      VALUES ('" . $pid . "','" . $pname . "','" . $pimg . "','" . stripslashes($pdescp) . "','" . $cat . "')";
//                                    echo $query;
                                    $data = mysqli_query($conn, $query);
                                    if ($data) {
                                        echo "<font color='green'>Data inserted into Database";
                                    }
                                } else {
                                    echo "<font color='red'>All fiedls are required!";
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form  -->

        </div>
    </div>
</div>
</body>
</html>