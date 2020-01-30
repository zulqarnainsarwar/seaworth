<?php
include("connection.php");
$query = "SELECT `id`, `product_id`, `product_name`, `product_image`, `product_description`, cat_id FROM `product` where id =".$_GET['id'];
$data = mysqli_query($conn, $query);
$display = mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $result['id']?>" name="id">
                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Select Product To Store Data</label>
                                    <select name="cat_id">
                                        <?php
                                        $query = "SELECT id,name from categories";
                                        $data = mysqli_query($conn, $query);
                                        echo $query . "<br>";
                                        while ($result2 = mysqli_fetch_array($data)) {

                                        ?>
                                            <option <?php if($result2['id'] == $result['cat_id']){ echo 'selected'; } ?> value=" <?php echo $result2['id']; ?>"><?php echo $result2['name']; ?>  </option>;
                                        <?php
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
                                           placeholder="Product ID" value="<?php echo $result['product_id'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputText4" class="col-form-label">Product Name</label>
                                    <input id="inputText4" name="product_name" type="text" class="form-control"
                                           placeholder="Product Name" value="<?php echo $result['product_name'];?>">
                                </div>
                                <div class="form-group custom-file mb-3 ">
                                    <label for="" class="form-control-label">Upload Image</label>
                                    <input type="file" name="product_image" id="product_image" class="form-control" value="<?php echo $result['product_image'];?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                    <textarea class="form-control" name="product_description"
                                              id="exampleFormControlTextarea1" rows="3"><?php echo $result['product_description'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="upload" value="update"/></div>
                            </form>
                            <?php
                            if (isset($_POST['upload'])) {
                                   $id =$_POST['id'];
                                $pid = $_POST['product_id'];
                                $pname = $_POST['product_name'];
//                                $pimg=$_POST['product_image'];
//                                $tempname=$_POST['product_image'];
                                $pimg = $_FILES['product_image']['name'];
                                $tempname = $_FILES['product_image']['tmp_name'];
                                $folder = "/assets/images/img-grid/" . $pimg;
                                move_uploaded_file($tempname, $folder);
                                $pdescp = $_POST['product_description'];
                                $cat = $_POST['cat_id'];
                                print_r($_POST);
                                die;
                                if ($pid != "" && $pname != "" && $pimg != "" && $pdescp != "" && $cat) {


//
//                                    $query = " UPDATE product  SET product_id ='$pid' , product_name='$pname', product_image= '$pimg', product_description='$pdescp' WHERE id='$id' ";
//                                    $query = "UPDATE `product` SET 'id'='".$id."' `product_id` = '".$pid."', `product_name` = '".$pname."', `product_image` = '".$pimg."',
//                                             `product_description` = '".$pdescp."'  WHERE `product`.`id`=".$id;

//
                                    $query = "UPDATE `product` SET id`=$id`, product_id`= $pid,`product_name`=$pname,`product_image`=$pimg,`product_description`=$pdescp,`cat_id`=$cat WHERE id=$id";
                                  $data = mysqli_query($conn, $query);
                                   if ($data) {
                                      echo "<font color='green'>Record Updated Successfully.<a href='http://localhost/seawth/admin/index.php?req=view'>Check Updated list Here</a>";
                                  } else {
                                     echo "<font color='red'>Record Not Updated.<a href='http://localhost/seawth/admin/index.php?req=view'>Check Updated list Here</a>";
                                   }
                                }
                                else {
                                   echo "<font color='blue'>Click on update button to save changes!";
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

                                <?php
                            }  ?>
