<?php include("header.php"); ?>
<body>
<!-- Main Slider Start-->
<section id="main-slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="./assets/images/slider/Sports.png" class="d-block w-100  wow bounceInLeft"
                     alt="First-Image">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <a type="button" class="btn btn-index btn-lg wow zoomInDown">Get More</a>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slider/Tactical.png " class="d-block w-100 wow bounceInDown"
                     alt="Second-Image">
                <!-- <div class="carousel-caption d-none d-md-block ">
                    <a type="button" class="btn btn-index  btn-lg  wow zoomInDown">Get More</a>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slider/Bike.png" class="d-block w-100 wow fadeInUp"
                     alt="Third-Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slider/Leather.png" class="d-block w-100 wow fadeInUp"
                     alt="Fourth-Image">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--Our Products-->
<section id="our-product">
    <h2 class="wow flip">Our Products</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
    <!--Start--->
    <div class="row">
        <?php
        include("connection.php");
        error_reporting(0);
        $query = "SELECT  id,name, img, description FROM categories where parent_id= 0 order by id ASC ";
        $data = mysqli_query($conn, $query);
        $display = mysqli_num_rows($data);
        if ($display > 0) {


            while ($result = mysqli_fetch_array($data)) {
                ?>


                <div class="col-sm-6 col-md-3">
                    <a href="product-detail.php?id=<?php echo $result['id'] ?>"><img
                                src="assets/images/img-grid/<?php echo trim($result['img']); ?>" class="img-thumbnail"
                                alt="Product-detail" title="<?php echo $result['name']; ?>"></a>
                    <img-caption class="text-center">
                            <h4><?php echo $result['name']; ?></h4>

                        <p><?php echo $result['description']; ?></p>
                    </img-caption>
                </div>

            <?php } ?>
        <?php } ?>
    </div>

</section>

<!--About Us-->
<section id="about-us my-2">
    <div class="row mx-2 my-2">
        <div class="col-md-6 col-sm12 ">
            <h4>HOW WE ARE</h4>
            <h3><b>ABOUT DONOR</b> INDUSTRIES</h3>
            <p class="about-text">We are indeed pleased to present you our website.We have tried our very best to add
                all new models with creative designs to meet the present market requirements.We would like to give you
                more information about our organization , which
                was our wide range of products includes high quality MOTORBIKE GLOVES CLOTHING & AND SAFETY CLOTHING
                LEATHER AND TECHTICAL PRODUCTS etc...</p s>
            <a type="button" class="btn  btn-index btn-lg " href="about.php">About Us</a>
        </div>
        <div class="col-sm-12 col-md-6  py-1">
            <img src="assets/images/Back_Express.png" alt="img-wearing" class="img-fluid">
        </div>

    </div>

</section>
<!--Feature Products-->

<section class="carousel slide py-4 "" data-ride="carousel" id="feature-products">
    <h3><b>FEATURED</b> PRODUCTS</h3>
    <P>100% BEST QUALITY PRODUCTS</P>
    <hr style="width: 90px; background: #000;">
    <div class="container text-center  pb-3">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/di-1002_pimg1.jpg ">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/bikeleather6.jpg">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/bikeleather3.jpg">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/bikeleather4.jpg">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/bikeleather5.jpg">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="assets/images/bikeleather6.jpg">
                                <div class="main-feature">
                                    <h3>BIKES LEATHER SUITE</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">-->
<!--                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"-->
<!--                          aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>-->
                <div class="owl-prev  w-auto"  role="button" data-slide="prev"  href="#recipeCarousel" >
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
<!--                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">-->
<!--                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"-->
<!--                          aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
                <div class="owl-next  w-auto"  role="button" data-slide="next"  href="#recipeCarousel"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>

</section>
<!--Our Certification-->
<section class="pt-3 " id="our-certiicate">
    <h4>OUR</h4>
    <h2>CERTIFICATES</h2>
    <hr style="width: 90px; background: #9e9fa7">
    <div class="row">
        <div class="col-sm-12 col-md-12 text-center  py-3">
            <img src="assets/images/cer1.png" class=" img-fluid mr-2 " alt="Certificate">
            <img src=" assets/images/cer3.png " class="img-fluid  mr-2  " alt="Certificate ">
            <img src="assets/images/cer5.png " class="img-fluid mr-2  " alt="Certificate ">

        </div>
    </div>
    <div class="footer_icon ">

        <div class="row">
            <div class="col-md-4">
                <div class="icon">
                    <img src="assets/images/wan.png" alt="">
                    <h3>FAST DELIVERY</h3>
                    <h2>WE CAN ALSO HELP YOU ONLINE.</h2>
                    <p>Want to track a package? Find tracking<br> information and order details from Your Orders</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <img src="assets/images/clock.png" alt="">
                    <h3>100% MONEY BACK</h3>
                    <h2>WITHIN 30 DAYS AFTER DELIVERY</h2>
                    <p>You may return most new, unopend item sold<br> within 30 days of delivery for a full refund</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <img src="assets/images/international.png" alt="">
                    <h3>SUPPORT 24/7</h3>
                    <h2>WE CAN HELP YOU ONLINE</h2>
                    <p>We offer a 24/7 customer hotline so you're<br> never alone if you have a question</p>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include("footer.php"); ?>
</body>
