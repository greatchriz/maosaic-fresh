<x-front-end.layout.app>
    <!-- ##### Welcome Area Start ##### -->
        {{-- instantiate a component with the following path views/components/front-end/layout/page-header --}}
        <x-front-end.layout.page-header style="background-image: url('/img/bg-img/about-bg.jpeg');" title="About Us" />


    <!-- ##### Welcome Area End ##### -->

    <div class="faq-timeline-area transparent section-padding-100-50" id="faq">
        <div class="container">
            <div class="section-heading text-center">
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">WHO WE ARE</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">

                Crownagent Bank & Trust Company
                </h2>

            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="wrapper-counter">
                        <img src="img/bg-img/building.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="faq-area mt-s">
                        <p class="fadeInUp mb-4" data-wow-delay="0.4s">
                            Established in 1962, CrownAgent Bank & Trust Company has become the premier universal bank and among the foremost financial institutions in the Philippines today.
                        </p>
                        <p class="fadeInUp mb-4" data-wow-delay="0.4s">
                            With a history spanning more than 60 years, it aims to deliver meaningful banking to Filipinos everywhere by providing innovative, relevant, and convenient financial solutions.
                        </p>

                        <p class="fadeInUp mb-4" data-wow-delay="0.4s">
                            It boasts diverse product portfolio including investment banking, thrift banking, leasing and financing, bancassurance, and credit cards.
                        </p>

                        <p class="fadeInUp mb-4" data-wow-delay="0.4s">
                            It offers a full range of services to large local and multinational corporations, middle-market and SMEs, high net-worth individuals and retail segment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="section-padding-100-70 relative">
        <div class="container">
            <div class="section-heading text-center">
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">OUR FEATURES</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">Why Choose Us</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                    accumsan nisi Ut ut felis congue nisl hendrerit commodo.
                </p>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w4.png" alt="" />
                        </div>
                        <h6>Low Transaction Fee</h6>
                        <p>
                            Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam,
                            maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w5.png" alt="" />
                        </div>
                        <h6>Fast Payment Method</h6>
                        <p>
                            Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam,
                            maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/icons/w6.png" alt="" />
                        </div>
                        <h6>Dedicated Support Team</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam,
                            maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <x-front-end.sections.visions />

    <x-front-end.sections.pdf />


{{--
    <section class="relative section-padding-100-70 payment-section-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="ab-wrapper">
                        <img class="abso-img1" src="img/core-img/about-11.png" alt="" />
                        <img class="wow abso-img2 fadeInUp floating animated" data-wow-delay="0.2s"
                            src="img/core-img/about-12.png" alt="" />
                        <img class="abso-img3" src="img/core-img/dotted1.svg" alt="" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant mt-s">
                        <div class="mb-15 text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text blue">Reliable Online Payment Platform</span>
                        </div>
                        <h4 class="fadeInUp" data-wow-delay="0.3s">
                            Transfer and Deposite your money anytime, anywhere in the world
                        </h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem
                            dolorum et sit nisi, mollitia animi porro fuga sequi, molestias
                            repellat excepturi nobis eum culpa voluptates dolorem dolorum
                            et.
                        </p>
                        <div class="services-block-four v2 mt-30">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Powerfull Mobile And Online App</a></h3>
                                <div class="text width-80">
                                    Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing
                                    elit alias officia aperiam.
                                </div>
                            </div>
                        </div>
                        <div class="services-block-four v2">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Brings More Transparency And Speed</a></h3>
                                <div class="text width-80">
                                    Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing
                                    elit alias officia aperiam.
                                </div>
                            </div>
                        </div>
                        <div class="services-block-four v2">
                            <div class="inner-box">
                                <div class="icon-font-box">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3><a href="#">Special For Multiple Use Capabilities</a></h3>
                                <div class="text width-80">
                                    Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing
                                    elit alias officia aperiam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="about-us-area section-padding-100-70 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-0 col-xs-12">
                    <!--Services Block Four-->
                    <div class="services-block-four transparent">
                        <div class="inner-box">
                            <div class="icon-icon bg4">
                                <img src="img/icons/i1.png" alt="" />
                            </div>
                            <h3>
                                <a class="normal" href="#">Register / Login to our Platform</a>
                            </h3>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                                Laudantium modi assumenda beatae provide nt dolor consectetur
                                aliquam posuere tortor,.
                            </p>
                        </div>
                    </div>
                    <!--Services Block Four-->
                    <div class="services-block-four transparent">
                        <div class="inner-box">
                            <div class="icon-icon bg4">
                                <img src="img/icons/i2.png" alt="" />
                            </div>
                            <h3>
                                <a class="normal" href="#">Enter your information details </a>
                            </h3>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                                Laudantium modi assumenda beatae provide nt dolor consectetur
                                aliquam posuere tortor,.
                            </p>
                        </div>
                    </div>
                    <!--Services Block Four-->
                    <div class="services-block-four transparent">
                        <div class="inner-box">
                            <div class="icon-icon bg4">
                                <img src="img/icons/i3.png" alt="" />
                            </div>
                            <h3>
                                <a class="normal" href="#">Start Sharing your Referral Link</a>
                            </h3>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                                Laudantium modi assumenda beatae provide nt dolor consectetur
                                aliquam posuere tortor,.
                            </p>
                        </div>
                    </div>
                    <!--Services Block Four-->
                    <div class="services-block-four transparent mb-0">
                        <div class="inner-box">
                            <div class="icon-icon bg4">
                                <img src="img/icons/i4.png" alt="" />
                            </div>
                            <h3>
                                <a class="normal" href="#">Start Earning From Affiliate System</a>
                            </h3>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                                Laudantium modi assumenda beatae provide nt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="service-img-wrapper">
                        <div class="image-box">
                            <img src="img/core-img/appo.png" class="center-block img-responsive phone-img"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-front-end.layout.app>
