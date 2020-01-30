
<?php include("header.php"); ?>
<body>
<!--Image Grid---->
<section>
    <div class="row">
        <div class="col-md-3">
            <!--Side nav-->
            <div class="nav-side-menu">
                <div class="brand">Our Products</div>
                <i class="fa fa-bars fa-2x toggle-btn " data-toggle="collapse" data-target="#menu-content"></i>

                <div class="menu-list">

                    <ul id="menu-content" class="menu-content collapse out">

                        <li data-toggle="collapse" data-target="#products" class="collapsed">
                            <a href="#"><i class="fa fa-futbol-o"></i> Sports Wear <span class=" arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="products">

                            <li class="active"><a href="#">Basketball Uniform</a></li>
                            <li><a href="#">Baseball Uniform</a></li>
                            <li><a href="#">Soccer Uniform</a></li>
                            <li><a href="#">Tennis Uniform</a></li>
                            <li><a href="#">American Football Uniform</a></li>
                            <li><a href="#">Sublimated Tees</a></li>
                            <li><a href="#">Polo Shirt</a></li>
                            <li data-toggle="collapse" data-target="#cas" class="collapsed">
                                <a href="#"><i class="fa fa-gift fa-lg"></i> Custom Apparel Shirts <span
                                            class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="cas">
                                <li class="active"><a href="#">Custom Apparel shorts</a></li>
                                <li><a href="#">SportsBra</a></li>
                                <li><a href="#">Compression Pants</a></li>
                                <li><a href="#">American Football Gloves</a></li>
                                <li><a href="#">Shorts</a></li>
                            </ul>
                        </ul>


                        <li data-toggle="collapse" data-target="#service" class="collapsed">
                            <a href="#"><i class="fa fa-globe fa-lg"></i> Tactical Products <span
                                        class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="service">
                            <li><a href="#">Tactical Caps</a></li>
                            <li><a href="#">Tactical Gloves</a></li>
                            <li><a href="#">Tactical Pants</a></li>
                            <li><a href="#">Tactical Uniforms</a></li>
                            <li><a href="#">Tactical Knee elbow</a></li>
                            <li><a href="#">Tactical Rescue Gloves</a></li>
                        </ul>


                        <li data-toggle="collapse" data-target="#new" class="collapsed">
                            <a href="#"><i class="fa fa-car fa-lg"></i> M-bike Apparel <span
                                        class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="new">
                            <li><a href="#">Racing Gloves</a></li>
                            <li><a href="#">Motorbike Leather Suits</a></li>
                            <li><a href="#">Safety Jackets</a></li>
                            <li><a href="#">Textile Jackets</a></li>
                            <li><a href="#">Textile pants</a></li>
                        </ul>
                        <li data-toggle="collapse" data-target="#lg" class="collapsed">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Leather Goods <span
                                        class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="lg">
                            <li><a href="#">Leather Jackets</a></li>
                            <li><a href="#">Wallet</a></li>
                            <li><a href="#">Belts</a></li>
                            <li><a href="#">Bags</a></li>

                        </ul>
                    </ul>
                </div>
            </div>
            <!--Side nav endind-->
        </div>
        <div class="col-md-9">
            <div class="container-fluid pagi">
                <div class="pagination justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-light">
                            <!-- <li class="page-item "><a class="page-link ">First</a></li>  -->
                            <li class="page-item  ml-5">
                                <a class="page-link " aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link ">1</a></li>
                            <li class="page-item"><a class="page-link ">2</a></li>
                            <li class="page-item"><a class="page-link ">3</a></li>
                            <li class="page-item"><a class="page-link ">4</a></li>
                            <li class="page-item"><a class="page-link ">5</a></li>
                            <li class="page-item  ">
                                <a class="page-link " aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <!-- <li class="page-item"><a class="page-link ">Last</a></li>  -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container" id="product-container">
                <div class="row mt-4">
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $id=$_GET['id'];
                    $pid=$_GET['parent_id'];
                    if ($id) {
                        $query = "SELECT * FROM product WHERE cat_id IN(select id from categories where parent_id=".$id.")";
                    } else {
                        $query = "SELECT  `product_id`, `product_name`, `product_image`, `product_description`
                                  FROM `product`  order by id ASC";
                    }

                    $data = mysqli_query($conn, $query);
                    $display = mysqli_num_rows($data);
                    if ($display > 0) {
                        while ($result = mysqli_fetch_array($data)) {
                            ?>

                            <div class="col-sm-6 col-md-4  col-lg-4">
                                <figure class="card card-product ">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-grid/<?php echo trim($result['product_image']); ?>"
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
                                                    <div class="carousel-inner zoom ex1" >
                                                        <div class="carousel-item  active" >
		                                              <img src="assets/images/img-grid/<?php echo trim($result['product_image']); ?>" class="d-block img-fluid "  alt="Image-Model">
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
                                                    <div class="size">
                                                        <h4>You can check size chart here :</h4>
                                                        <a href="sizechart.php">Size Chart <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                        </a>
                                                    </div>

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
<?php include("footer.php"); ?>
</body>


