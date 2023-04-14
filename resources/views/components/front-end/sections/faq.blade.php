@aware(['faqs'])

<div class="faq-timeline-area transparent section-padding-100-85" id="faq">
    <div class="container">
        <div class="section-heading text-center">
            <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span class="gradient-text blue">Our Platform FAQ</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">
                HELP & SUPPORT
            </h2>
            <p class="fadeInUp" data-wow-delay="0.4s">
                How may we help you?
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
                        @foreach ($faqs as $faq)
                            <dt class="wave fadeInUp" data-wow-delay="0.2s">
                                {{ $faq->dt }}
                            </dt>
                            <dd class="fadeInUp" data-wow-delay="0.3s">
                                <p>
                                    {{ $faq->dd }}
                                </p>
                            </dd>
                        @endforeach

                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
