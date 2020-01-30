<!---JS---->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js "></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "></script>
<!--Custom JS-->
<script src="./assets/js/custom.js "></script>
<script src="./assets/js/wow.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='assets/js/jquery.zoom.js'></script>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function(){
        $('.ex1').zoom();
    });
</script>
<!--Zoom In picture in Product-detail page-->
<!--<script src='./assets/js/jquery-1.8.3.min.js'></script>-->
<!--<script src='./assets/js/jquery.elevatezoom.js'></script>-->
<!--<script>-->
<!---->
<!--    $('#zoom_01').elevateZoom({-->
<!--        zoomType: "inner",-->
<!--        cursor: "crosshair",-->
<!--        zoomWindowFadeIn: 500,-->
<!--        zoomWindowFadeOut: 750-->
<!--    });-->
<!---->
<!--</script>-->
<!--Footer Section-->
<section>
    <div class=" pt-3  footer">
        <div class="row  text-center">
            <div class="col-sm-6 col-md-3 col-lg-3  about-company">
                <h3>Information</h3>
                <ul class="m-0 p-0 list-style " style="list-style: none;">
                    <li> <a href="index.php">Home </a></li>
                    <li> <a href="about.php">About Us</a></li>
                    <li> <a href="#">Products</a></li>
                    <li> <a href="sizechart.php">Size Chart</a></li>
                    <li> <a href="#">SiteMap</a></li>
                    <li> <a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3  categories">
                <h3>Categories</h3>
                <ul class="m-0 p-0 list-style" style="list-style: none;">
                    <li><a href="#">Motorbike Apparel</a></li>
                    <li><a href="#">Tactical Product</a></li>
                    <li><a href="#">Etiam vitae mauris</a></li>
                    <li><a href="#">Sports wear</a></li>
                </ul>
            </div>
            <div class=" col-sm-6 col-md-3 col-lg-3  feedback">
                <h3>Your Feedback</h3>
                <p>Give us your feedback to help us improve your experience in browsing our site.Thank You!</p>
<!--                <a href="#" class="btn btn-success btn-ind  btn-lg" type="button">Your Feedback here</a>-->
                <button type="button" class="btn btn-primary">Your feedback here</button>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 contact-us">
                <h3>Contact us</h3>
                <p><span class="fa fa-phone "></span>+92 523520151</p>
                <p><span class="fa fa-shopping-bag "></span>+92 523613311</p>
                <p><span class="fa fa-envelope-o "></span>sales@donor.pk</p>
                <p><span class="fa fa-map-marker "></span>Cheema Street,New Hamza House Sialkot Pakistan</p>
            </div>
        </div>
        <div class="row mt-5 mx-auto">
            <div class="col-sm-6 col-md-6 mt-lg-0 ">
              <span class=" " style="font-size:18px; color: #fff;">Write us an email</span>
                <span class="text-lightt" style="color: #c4c4c4;font-size: 16px;">Signup to get the latest stories and free returns!</span>
            </div>
            <div class="col-sm-6 col-md-6  mt-lg-0">
                <div class="row mb-2">
                    <div class="col-md-12 col-sm-12 clpadr">
                        <div class="search">
                            <form method="post">
                                <input type="email" name="emailaddress" placeholder="Enter Your Email">
                                <button type="submit">Subscribe Now!</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright-section">
            <div class="col copyright mt-1">
                <p class=""><small class="text-white"><a href="http://thekodealpha.com" target="_blank">Develop By TheKodeAlpha.com</a></small></p>
            </div>
            <div class="col copyright mt-1">
                <p class=""><small class="text-white">© <?php echo date("Y");?> All Rights Reserved.</small></p>
            </div>
        </div>
    </div>
</section>