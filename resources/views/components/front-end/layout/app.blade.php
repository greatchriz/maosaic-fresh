<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from Crown Agent.netlify.app/index-demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 00:18:45 GMT -->
    <!-- Added by HTTrack -->
    <meta
        http-equiv="content-type"
        content="text/html;charset=UTF-8"
    /><!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8" />
        <meta
            name="description"
            content=""
        />
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        @if (request()->path() == '/')
        <!-- Title -->
        <title>Crown Agent | Home</title>
        @elseif(request()->path() == 'about')
        <!-- Title -->
        <title>Crown Agent | About</title>
        @elseif(request()->path() == 'contact')
        <!-- Title -->
        <title>Crown Agent | Contact</title>
        @elseif(request()->path() == 'faq')
        <!-- Title -->
        <title>Crown Agent | FAQ</title>
        @elseif(request()->path() == 'login')
        <!-- Title -->
        <title>Crown Agent | Login</title>
        @elseif(request()->path() == 'register')
        <!-- Title -->
        <title>Crown Agent | Register</title>
        @elseif(request()->path() == 'forgot-password')
        <!-- Title -->
        <title>Crown Agent | Forgot Password</title>
        @elseif(request()->path() == 'reset-password')
        <!-- Title -->
        <title>Crown Agent | Reset Password</title>
        @endif
        <!-- Title -->





        <!-- Favicon -->
        <link
            rel="icon"
            href="img/core-img/logo.svg"
        />

        <!-- Core Stylesheet -->
        <link
            rel="stylesheet"
            href="css/style.css"
        />

        <!-- Responsive Stylesheet -->
        <link
            rel="stylesheet"
            href="css/responsive.css"
        />
    </head>

    <body class="light-version">
        <!-- Preloader -->
        <div id="preloader">
            <div class="preload-content">
                <div id="loader-load"></div>
            </div>
        </div>

        <x-front-end.layout.nav />


        <!-- Login popup form  -->


        {{ $slot }}

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area bg-img">

            <div class="footer-content-area mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-6">
                            <div class="footer-copywrite-info">
                                <!-- Copywrite -->
                                <div
                                    class="copywrite_text fadeInUp"
                                    data-wow-delay="0.2s"
                                >
                                    <div class="footer-logo">
                                        <a href="#"><img
                                                src="img/core-img/logo.svg"
                                                alt="logo"
                                            /> Crown Agent
                                        </a>
                                    </div>
                                    <p>
                                        For inquiries, please call our Crownagent Contact Center at (02) 88-700-700
                                        (domestic toll-free 1-800-1888-5775) or send an e-mail to
                                        customercare@Crownagent.org


                                        Crownagent is regulated by the Bangko Sentral ng Pilipinas
                                        Website: https://www.bsp.gov.ph
                                    </p>
                                </div>
                                <!-- Social Icon -->
                                <div
                                    class="footer-social-info fadeInUp"
                                    data-wow-delay="0.4s"
                                >
                                    <a href="#"><i
                                            class="fa fa-facebook"
                                            aria-hidden="true"
                                        ></i></a>
                                    <a href="#">
                                        <i
                                            class="fa fa-twitter"
                                            aria-hidden="true"
                                        ></i></a>
                                    <a href="#"><i
                                            class="fa fa-google-plus"
                                            aria-hidden="true"
                                        ></i></a>
                                    <a href="#"><i
                                            class="fa fa-instagram"
                                            aria-hidden="true"
                                        ></i></a>
                                    <a href="#"><i
                                            class="fa fa-linkedin"
                                            aria-hidden="true"
                                        ></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <!-- Content Info -->
                                <div
                                    class="contact_info mt-x text-center fadeInUp"
                                    data-wow-delay="0.3s"
                                >
                                    <h5>PRIVACY & TOS</h5>
                                    <a href="#">
                                        <p>Advertiser Agreement</p>
                                    </a>
                                    <a href="#">
                                        <p>Acceptable Use Policy</p>
                                    </a>
                                    <a href="#">
                                        <p>Privacy Policy</p>
                                    </a>
                                    <a href="#">
                                        <p>Technology Privacy</p>
                                    </a>
                                    <a href="#">
                                        <p>Developer Agreement</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-2 col-md-6">
                            <!-- Content Info -->
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <div
                                    class="contact_info mt-s text-center fadeInUp"
                                    data-wow-delay="0.2s"
                                >
                                    <h5>NAVIGATE</h5>
                                    <a href="#">
                                        <p>Advertisers</p>
                                    </a>
                                    <a href="#">
                                        <p>Developers</p>
                                    </a>
                                    <a href="#">
                                        <p>Resources</p>
                                    </a>
                                    <a href="#">
                                        <p>Company</p>
                                    </a>
                                    <a href="#">
                                        <p>Connect</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <!-- Content Info -->
                                <div
                                    class="contact_info mt-s text-center fadeInUp"
                                    data-wow-delay="0.4s"
                                >
                                    <h5>CONTACT US</h5>
                                    <p>Mailing Address:xx00 E. Union Ave</p>
                                    <p>Suite 1100. Denver, CO 80237</p>
                                    <p>+999 90932 627</p>
                                    <p>support@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area End ##### -->

        <!-- ########## All JS ########## -->
        <!-- jQuery js -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Parallax js -->
        <script src="js/dzsparallaxer.html"></script>

        <script src="js/jquery.syotimer.min.js"></script>

        <!-- script js -->
        <script src="js/script.js"></script>

        <script src="//code.tidio.co/febkkdxyeznjhe4gj4dob3aen0afxgls.js"></script>


        <script type="text/javascript">
            function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>

        <script
            type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        ></script>

    </body>

    <!-- Mirrored from Crown Agent.netlify.app/index-demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 00:19:26 GMT -->

</html>
