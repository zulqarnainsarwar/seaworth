<?php include("header.php");?>
<body>
    <!--Contact-Heading-->
    <section class="contact-heading text-center">
        <h3 class="my-2">Contact Us</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
    </section>
    <!--Details-->
    <section class="contact-detail">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title">
					Send Us A Message
				</span>
                    <label class="label-input100" for="first-name">Tell us your name *</label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                        <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                        <input class="input100" type="text" name="last-name" placeholder="Last name">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="email">Enter your email *</label>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="phone">Enter phone number</label>
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="phone" placeholder="PK. +92 233 1234567">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="message">Message *</label>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
						Send Message
					</button>
                    </div>
                </form>

                <div class="contact100-more flex-col-c-m">
                    
                    <div class="d-flex size1 pb-4">
                        <div class="txt1 pr-2">
                            <span class="fa fa-phone mr-3"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 pb-2">
							Lets Talk
						</span>

                            <span class="txt3">
                                +92 301-6104228
						</span>
                        </div>
                    </div>
                    <div class="d-flex size1 pb-4">
                        <div class="txt1 p-r-25">
                            <span class="fa fa-whatsapp mr-3"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 pb-2">
							Lets Talk
						</span>

                            <span class="txt3">
                                +92 300-6152636
						</span>
                        </div>
                    </div>
                    <div class="d-flex size1 pb-4">
                        <div class="txt1 p-r-25">
                            <span class="fa fa-envelope mr-3"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 pb-2">
							General Support
						</span>

                            <span class="txt3">
                                sales@seaworthenterprises.com
						</span>
                        </div>
                    </div>
                    <div class="flex-w size1 pb-4">
                        <div class="txt1 p-r-25">
                            <span class="fa fa-map-marker mr-3"></span>
                        </div>
                        <div class="flex-col size2">
                            <span class="txt1 pb-3">
							Address
						</span>
                            <span class="txt2">
                                Office # 13 Taseer Center, Kutchery Road, Sialkot
						</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php include("footer.php");?>
</body>