<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Toptap - Contact</title>

<!-- Fav Icon -->
<!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/elements-css/page-title.css" rel="stylesheet">
<link href="assets/css/elements-css/contact.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

    <?php include("header.php"); ?>

        <!-- page-title -->
        <section class="page-title centred p_relative">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-style-two -->
        <section class="contact-style-two p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_30">
                                <span class="sub-title">Quick Contact</span>
                                <h2>Have Inquiries?<br />Feel Free to Reach Out to Us</h2>
                            </div>
                            <div class="text mb_30">
                                <p>Don't hesitate to get in touch with us if you have any questions or need assistance. We're here to provide the answers and support you require, ensuring your peace of mind.</p>
                            </div>
                            <div class="location-box pb_40 mb_110">
                                <div class="icon-box"><i class="icon-61"></i></div>
                                <h3>Location</h3>
                                <p>141, First Floor, 12 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-62"></i></div>
                                            <h3>Quick Contact</h3>
                                            <ul class="info-list clearfix">
                                                <li>
                                                    <h5>Phone:</h5>
                                                    <p><a href="tel:18963648018">+1 89-636-48018</a></p>
                                                </li>
                                                <li>
                                                    <h5>Email:</h5>
                                                    <p><a href="mailto:yourmail@info.com">yourmail@info.com</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-63"></i></div>
                                            <h3>Opening Hrs</h3>
                                            <ul class="info-list clearfix">
                                                <li>
                                                    <h5>Mon - Friday:</h5>
                                                    <p>09.00 am to 07.00 pm</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="sec-title mb_40">
                                <span class="sub-title">Let’s Connect</span>
                                <h2>Share Your Message</h2>
                                <p> Your thoughts, queries, and feedback are important to us. Use this platform to express your thoughts, and we'll be sure to attend to your message promptly.</p>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your message here"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="custom-controls-stacked pb_20">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn btn-two" name="submit-form"><span>Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- google-map-section -->
        <section class="google-map-section p_relative">
            <div class="auto-container">
                <div class="map-inner p_relative d_block">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="40.712776" 
                        data-map-lng="-74.005974"  
                        data-map-title="Brooklyn, New York, United Kingdom" 
                        data-map-zoom="12" 
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>"]
                        }'>

                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->

    </div>

    <?php include("footer.php"); ?>

</body><!-- End of .page_wrapper -->
</html>
