<html>
<head>
    <!-- Bootstrap--->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--Font Awsom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .card-product .img-wrap {
        border-radius: 3px 3px 0 0;
        overflow: hidden;
        position: relative;
        height: 220px;
        text-align: center;
    }
    .card-product .price-new,
    .card-product .price {
        margin-right: 5px;
        color: white;
    }

    .card-product .img-wrap img {
        /* max-height: 100%;
            max-width: 100%; */
        object-fit: cover;
        max-height: fit-content !important;
    }

    .card-product .info-wrap {
        overflow: hidden;
        padding: 5px;
        border-top: 1px solid #eee;
        background-color: rgb(227, 61, 62);
        color: rgb(96, 123, 228);
        height: 70px;
    }

    .card-product .info-wrap h6 a {
        color: white;
    }

    .card-product .action-wrap {
        padding-top: 4px;
        margin-top: 4px;
    }

    .card-product .bottom-wrap {
        padding: 15px;
        border-top: 1px solid #eee;
        background-color: darkgray;
    }

    .card-product .title {
        margin-top: 0;
    }
    .card-product .img-wrap:hover img {
        opacity: 0.3;
    }

    .card-product .img-wrap:hover .middle {
        opacity: 1;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    </style>

<body>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>View Products</h1>
    <!-- basic form  -->
            <section>
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container" id="product-container">
                                    <div class="row mt-4">
                                        <?php
                                        include("connection.php");
//                                        error_reporting(0);
                                        // $servername = "localhost";
                                        // $username = "root";
                                        // $password = "";
                                        // $dbname = "seaworth";
                                        // // Create connection
                                        // $conn = new mysqli($servername, $username, $password, $dbname);
                                        $pid=$_GET['product_id'];
                                        $pname=$_GET['product_name'];
                                        $pimg=$_GET['product_image'];
                                        $descp=$_GET['product_description'];
                                        $cat=$_GET['cat_id'];
                                        $id=$_GET['id'];
                                        if ($id) {
                                            $query = "SELECT * FROM product WHERE cat_id =$id";
                                        } else {
                                            $query = "SELECT `id`, `product_id`, `product_name`, `product_image`, `product_description`FROM `product`";
                                        }

                                        $data = mysqli_query($conn, $query);
                                        $display = mysqli_num_rows($data);
                                        if($display !=0)
                                        {
                                            while ($result = mysqli_fetch_array($data)) {
                                                ?>

                                                <div class="col-sm-6 col-md-3  col-lg-3">
                                                    <figure class="card card-product ">
                                                        <div class="img-wrap">
                                                            <img src="../assets/images/img-grid/<?php echo trim($result['product_image']); ?>"
                                                                 alt="Product Image" class="img-fluid">
                                                            <div class="middle">
                                                                <i class="fa fa-eye fa-3x" style="color:rgb(104, 99, 99);"
                                                                   data-toggle="modal"
                                                                   data-target="#exampleModalCenter<?php echo $result['product_id']; ?>"></i>
                                                            </div>
                                                        </div>
                                                        <figcaption class="info-wrap">
                                                            <h6 class="title text-dots"><a
                                                                        href="#"><?php echo $result['product_name']; ?></a></h6>
                                                            <div class="action-wrap">
                                                                <!-- <a href="#" class="btn cardbut btn-sm float-right"> Order </a> -->
                                                                <div class="price-wrap h5">
                                                                    <span class="price-new"><?php echo $result['product_id']; ?></span>
                                                                </div>
                                                                <!-- price-wrap.// -->
                                                            </div>
                                                            <!-- action-wrap -->
                                                        </figcaption>
                                                    </figure>
                                                    <?php
                                                    echo "
                                                    <div class='row mb-2'>
                                                        <div class='col-sm-6 m-auto'>
                                                        <a class='btn-primary btn' href='pages/update.php?id=$result[id]'>Edit</a></div>
                                                        <div class='col-  m-auto'><a  class='btn-danger btn' href='pages/delete.php?id=$result[id]' onclick = 'return checkdelete()'>Delete</a></div>
                                                     
                                                    </div>
                                                    "
                                                     ?>
                                                </div>
                                                <!--// Model View-->
                                                <div class="modal fade" id="exampleModalCenter<?php echo $result['product_id']; ?>"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title "
                                                                    id="exampleModalLongTitle"><?php echo $result['product_name']; ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="carousel-inner">
                                                                            <div class="carousel-item active">
                                                                                <img src="../assets/images/img-grid/<?php echo trim($result['product_image']); ?>"
                                                                                     class="d-block img-fluid h-100 w-100" id="zoom_01" data-zoom-image="assets/images/img-grid/<?php echo trim($result['product_image']); ?>" alt="...">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="product-title"><?php echo $result['product_id']; ?></h3>
                                                                        <div class="rating">
                                                                            <div class="stars">
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                            </div>
                                                                            <span class="review-no">41 reviews</span>
                                                                        </div>
                                                                        <p class="product-description"><?php echo $result['product_description']; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm" data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--// End of Model View-->
                                                <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                    <!-- row.// -->
                                    <!--container end-->
                                </div>
                            </div>
                        </div>

            </section>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
        </div>
    </div>
</div>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this data ??')
    }
</script>

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js "></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "></script>
</body>
</html>