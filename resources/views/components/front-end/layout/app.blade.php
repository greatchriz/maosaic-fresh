<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from masref.netlify.app/index-demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 00:18:45 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>Masref Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
      <div class="preload-content">
        <div id="loader-load"></div>
      </div>
    </div>

    <x-front-end.layout.nav>
        slot goes here
    </x-front-end.layout.nav>

    <!-- Login popup form  -->

    <div id="test-popup" class="white-popup mfp-hide">
      <div class="top-form-header">
        <h4>Login Form</h4>
      </div>
      <form action="#" method="post" id="main_login_form" novalidate="">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="text" name="name" id="name0" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Email</label>
            </div>
          </div>
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="password" name="name" id="name1" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Password</label>
            </div>
          </div>

          <div class="col-12 col-sm-5 text-left">
            <button type="submit" class="btn more-btn">Login</button>
          </div>
          <div class="col-12 col-sm-7 text-left">
            <p class="mb-0 mt-10">
              Don't have an account? <a href="#">Sign up</a>
            </p>
          </div>
        </div>
      </form>

      <div class="other-accounts text-center">
        <p class="w-text">Login with other account</p>
        <div class="footer-social-info">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <!-- signup popup form so: -->

    <div id="signup-popup" class="white-popup mfp-hide">
      <div class="top-form-header">
        <h4>Signup Form</h4>
      </div>
      <form action="#" method="post" id="main_Signup_form" novalidate="">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="text" name="name" id="name3" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Name</label>
            </div>
          </div>
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="text" name="name" id="name4" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Email</label>
            </div>
          </div>
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="password" name="name" id="name5" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Password</label>
            </div>
          </div>
          <div class="col-12 col-md-12">
            <div class="group">
              <input type="password" name="name" id="name6" required="" />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Confirm Password</label>
            </div>
          </div>

          <div class="col-12 col-sm-5 text-left">
            <button type="submit" class="btn more-btn">Login</button>
          </div>
          <div class="col-12 col-sm-7 text-left">
            <p class="mb-0 mt-10">
              Don't have an account? <a href="#">Sign up</a>
            </p>
          </div>
        </div>
      </form>

      <div class="other-accounts text-center">
        <p class="w-text">Login with other account</p>
        <div class="footer-social-info">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
{{-- end of signup pop form --}}

 {{ $slot }}

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img">
    <!-- ##### team Area Start ##### -->
    <div class="striples-bg">
      <div
        class="faq-timeline-area transparent section-padding-100-85"
        id="faq"
      >
        <div class="container">
          <div class="section-heading text-center">
            <div
              class="mb-15 justify-content-center fadeInUp"
              data-wow-delay="0.2s"
            >
              <span class="gradient-text blue">Our Platform FAQ</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">
              Frequently Questions
            </h2>
            <p class="fadeInUp" data-wow-delay="0.4s">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
              quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.
            </p>
          </div>
          <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-md-12">
              <div class="wrapper-counter">
                <img src="img/core-img/about-2.png" alt="" />
              </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12">
              <div class="faq-area mt-s">
                <dl style="margin-bottom: 0">
                  <!-- Single FAQ Area -->
                  <dt class="wave fadeInUp" data-wow-delay="0.2s">
                    What are the objectives of this Platform?
                  </dt>
                  <dd class="fadeInUp" data-wow-delay="0.3s">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt
                      accusamus enim necessitatibus est fugiat, assumenda
                      dolorem, deleniti corrupti cupiditate ipsum, dolorum
                      voluptatum esse error?
                    </p>
                  </dd>
                  <!-- Single FAQ Area -->
                  <dt class="wave fadeInUp" data-wow-delay="0.3s">
                    What is the best features and services we deiver?
                  </dt>
                  <dd>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt
                      accusamus enim necessitatibus est fugiat, assumenda
                      dolorem, deleniti corrupti cupiditate ipsum, dolorum
                      voluptatum esse error?
                    </p>
                  </dd>
                  <!-- Single FAQ Area -->
                  <dt class="wave fadeInUp" data-wow-delay="0.4s">
                    Why this Platform important to me?
                  </dt>
                  <dd>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt
                      accusamus enim necessitatibus est fugiat, assumenda
                      dolorem, deleniti corrupti cupiditate ipsum, dolorum
                      voluptatum esse error?
                    </p>
                  </dd>
                  <!-- Single FAQ Area -->
                  <dt class="wave fadeInUp" data-wow-delay="0.5s">
                    how may I take part in and purchase this Platform?
                  </dt>
                  <dd>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt
                      accusamus enim necessitatibus est fugiat, assumenda
                      dolorem, deleniti corrupti cupiditate ipsum, dolorum
                      voluptatum esse error?
                    </p>
                  </dd>
                  <!-- Single FAQ Area -->
                  <dt class="wave fadeInUp" data-wow-delay="0.3s">
                    What is the best features and services we deiver?
                  </dt>
                  <dd>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt
                      accusamus enim necessitatibus est fugiat, assumenda
                      dolorem, deleniti corrupti cupiditate ipsum, dolorum
                      voluptatum esse error?
                    </p>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ##### Team Area Start ##### -->
      <section class="our_team_area section-padding-0-70 clearfix" id="team">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-heading text-center">
                <div
                  class="mb-15 justify-content-center fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <span class="gradient-text blue">Our Creative Team</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">
                  Our Awesome Team
                </h2>
                <p class="fadeInUp" data-wow-delay="0.4s">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                  quis accumsan nisi Ut ut felis congue nisl hendrerit
                  commodo.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="our-team ico-team">
                <div class="team_img">
                  <img
                    src="img/team-img/member1.png"
                    class="mt-30 width-80"
                    alt="chef-1"
                  />
                  <ul class="social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="team-content">
                  <h4 class="title">Randy crishen</h4>
                  <span class="post">Company CEO</span>
                </div>
              </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="our-team ico-team">
                <div class="team_img">
                  <img
                    src="img/team-img/member2.png"
                    class="mt-30 width-80"
                    alt="chef-1"
                  />
                  <ul class="social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="team-content">
                  <h4 class="title">Monica Ashker</h4>
                  <span class="post">Web Designer</span>
                </div>
              </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="our-team ico-team">
                <div class="team_img">
                  <img
                    src="img/team-img/member3.png"
                    class="mt-30 width-80"
                    alt="chef-1"
                  />
                  <ul class="social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="team-content">
                  <h4 class="title">Tollay Ramzomi</h4>
                  <span class="post">Web Developer</span>
                </div>
              </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="our-team ico-team">
                <div class="team_img">
                  <img
                    src="img/team-img/member4.png"
                    class="mt-30 width-80"
                    alt="chef-1"
                  />
                  <ul class="social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="team-content">
                  <h4 class="title">Jacke Wilson</h4>
                  <span class="post">Marketing Specialist</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ##### Team Area End ##### -->

      <!-- ##### Testimonial Area Start ##### -->
      <section
        class="clients_testimonials_area bg-img section-padding-0-0"
        id="test"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-heading text-center">
                <div
                  class="mb-15 justify-content-center fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <span class="gradient-text blue">Our Testimonials</span>
                </div>
                <h2 class="bl-text wow fadeInUp" data-wow-delay="0.3s">
                  Loved By Our Clients
                </h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                  quis accumsan nisi Ut ut felis congue nisl hendrerit
                  commodo.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="cotainer-fluid">
          <div
            class="row justify-content-center wow fadeInUp"
            data-wow-delay="0.4s"
          >
            <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
              <div class="client_slides owl-carousel">
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Image -->
                  <div class="testimonial_image">
                    <img src="img/test-img/1.jpg" alt="" />
                  </div>
                  <!-- Testimonial Feedback Text -->
                  <div class="testimonial-description">
                    <div class="testimonial_text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Officiis magni, quisquam, accusantium dolores
                        atque, doloribus odit minus maiores sunt mollitia
                        consequatur, soluta quasi.
                      </p>
                    </div>

                    <!-- Admin Text -->
                    <div class="admin_text">
                      <h5>Sunny Khan</h5>
                      <p>Head of Design, Company CEO</p>
                    </div>
                  </div>
                </div>

                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Image -->
                  <div class="testimonial_image">
                    <img src="img/test-img/2.jpg" alt="" />
                  </div>
                  <!-- Testimonial Feedback Text  -->
                  <div class="testimonial-description">
                    <div class="testimonial_text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Error nostrum adipisci porro quisquam. Rem,
                        earum, tenetur? Architecto et, earum repudiandae.
                      </p>
                    </div>

                    <!-- Admin Text -->
                    <div class="admin_text">
                      <h5>Ajoy Das</h5>
                      <p>Head of Idea, Company CEO</p>
                    </div>
                  </div>
                </div>

                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Image -->
                  <div class="testimonial_image">
                    <img src="img/test-img/3.jpg" alt="" />
                  </div>
                  <!-- Testimonial Feedback Text  -->
                  <div class="testimonial-description">
                    <div class="testimonial_text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Et delectus, nam repudiandae repellat id placeat
                        molestias consequuntur, laudantium dolorem nesciunt
                        sit.
                      </p>
                    </div>
                    <!-- Admin Text -->
                    <div class="admin_text">
                      <h5>Jebin Khan</h5>
                      <p>Head of Marketing, Company CEO</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ##### Testimonial Area End ##### -->

      <section class="our-partners clearfix section-padding-100-70">
        <div class="container">
          <div class="section-heading text-center">
            <div
              class="mb-15 justify-content-center fadeInUp"
              data-wow-delay="0.2s"
            >
              <span class="gradient-text blue">Our Main Partners</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">
              Our powerful Partners
            </h2>
            <p class="fadeInUp" data-wow-delay="0.4s">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
              quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/1.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/2.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/3.png"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/4.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/5.png"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/1.png"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/4.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <div class="team-img">
                  <img
                    class="img-responsive center-block"
                    src="img/partners/5.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- ##### team Area End ##### -->

    <div class="footer-content-area mt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4 col-md-6">
            <div class="footer-copywrite-info">
              <!-- Copywrite -->
              <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                <div class="footer-logo">
                  <a href="#"
                    ><img src="img/core-img/logo.png" alt="logo" /> Masref
                  </a>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Velit ducimus voluptatibus neque illo id repellat quisquam?
                  Autem expedita earum quae laborum ipsum ad.
                </p>
              </div>
              <!-- Social Icon -->
              <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                <a href="#"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-google-plus" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
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
                <a href="#"><p>Advertiser Agreement</p></a>
                <a href="#"><p>Acceptable Use Policy</p></a>
                <a href="#"><p>Privacy Policy</p></a>
                <a href="#"><p>Technology Privacy</p></a>
                <a href="#"><p>Developer Agreement</p></a>
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
                <a href="#"><p>Advertisers</p></a>
                <a href="#"><p>Developers</p></a>
                <a href="#"><p>Resources</p></a>
                <a href="#"><p>Company</p></a>
                <a href="#"><p>Connect</p></a>
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
</body>

<!-- Mirrored from masref.netlify.app/index-demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 00:19:26 GMT -->
</html>

