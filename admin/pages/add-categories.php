<?php
include("connection.php");
?>
<html>
<head>
</head>
<body>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>Add Categories Here!</h1>
            <!-- basic form  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Product ID</label>
                                    <input id="inputText3" name ="product_id" type="text" class="form-control"placeholder="Product ID">
                                </div> -->
                                <div class="form-group">
                                    <label for="inputText4" class="col-form-label">Categories Name</label>
                                    <input id="inputText4" name="ca_name" type="text" class="form-control"
                                           placeholder="Product Name">
                                </div>
                                <div class="custom-file mb-3">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="cat_image" id="cat_image" value=""/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Categories Description</label>
                                    <textarea class="form-control" name="cat_description" id="cat_description"
                                              rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit"/>
                                </div>
                            </form>
                            <?php
                            if ($_POST['submit']) {
                                $cname = $_POST['ca_name'];
                                // $pimg = $_POST['product_image'];
                                $cimg = $_FILES["cat_image"]["name"];
                                $tempname = $_FILES["cat_image"]["tmp_name"];
                                $folder = "../assets/images/img-grid/" . $cimg;
                                move_uploaded_file($tempname, $folder);
                                $cdescp = $_POST['cat_description'];
                                if ($cname != "" && $cimg != "" && $cdescp != "") {
                                    $query = "INSERT INTO categories(name, img, description)
                                      VALUES ('" . $cname . "','" . $cimg . "','" . stripslashes($cdescp) . "')";
//                                    echo "$query"."<br>";

                                    $data = mysqli_query($conn, $query);
                                    echo mysqli_error($conn);
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
