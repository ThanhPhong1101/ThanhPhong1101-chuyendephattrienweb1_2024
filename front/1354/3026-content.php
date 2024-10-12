<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <footer class="footer-area">
        <div class="container">
            <div class="upper-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12">
                        <div class="single-footer-widget pd-bottom">
                            <div class="footer-logo">
                                <a href="http://tk.commonsupport.com/repairplus/">
                                    <img class="img-fluid"
                                        src="http://tk.commonsupport.com/repairplus/wp-content/uploads/2017/02/footer-logo.png"
                                        alt="Awesome Logo">
                                </a>
                            </div>
                            <div class="repairplus-info">
                                <p class="top">Repairplus brings 41 years of Digital Repairs experience right to your
                                    Device.</p>
                                <p>Our commitment to bring professionalism and good service to the Phone repair service.
                                </p>
                                <a class="thm-btn bg-1" href="#"><strong>PURCHASE THEME</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="single-footer-widget">
                                        <h3>Our Services</h3>
                                        <ul class="services-list">
                                            <li><a href="#">Smart Phone Repair</a></li>
                                            <li><a href="#">Tablets &amp; iPad Repair</a></li>
                                            <li><a href="#">Desktop &amp; Laptop</a></li>
                                            <li><a href="#">Game System Repair</a></li>
                                            <li><a href="#">LCD &amp; LED TV Repair</a></li>
                                            <li><a href="#">MP3 &amp; MP4 Player</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="single-footer-widget">
                                        <h3>Subscribe US</h3>
                                        <p>Subscribe to our newsletter!</p>
                                        <form action="#" accept-charset="utf-8">
                                            <input type="hidden" name="uri" value="themeforest">
                                            <input name="email" placeholder="Enter Your Email..." type="text">
                                            <button type="submit"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                        <h4>We don’t do mail to spam and your mail id is confidential.</h4>
                                        <ul class="footer-social-links">
                                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.plus.google.com/"><i class="fa fa-google-plus"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="single-footer-widget">
                                        <h3>Contact Info</h3>
                                        <ul class="footer-contact-info">
                                            <li>
                                                <div class="icon-holder"><span class="flaticon-home-page"></span></div>
                                                <div class="text-holder">
                                                    <h5>32, Breaking Street,<br> 2nd cros, Newyork, USA 10002</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder"><span class="flaticon-call-answer"></span>
                                                </div>
                                                <div class="text-holder">
                                                    <h5>Call Us<br>+321 4567 89 012 &amp; 79 023</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder"><span class="flaticon-envelope"></span></div>
                                                <div class="text-holder">
                                                    <h5>Mail Us<br>Support@Repairplus.com</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder"><span class="flaticon-clock"></span></div>
                                                <div class="text-holder">
                                                    <h5>Opening Time<br>Mon - Sat: 09.00am to 18.00pm</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright-text">
                    <p>Copyrights © 2022 All Rights Reserved by <a href="#">ThemeKalia.</a></p>
                </div>
                <div class="payment-method">
                    <ul>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>