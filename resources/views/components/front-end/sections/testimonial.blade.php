   <!-- ##### Testimonial Area Start ##### -->
   <section class="clients_testimonials_area bg-img section-padding-0-0" id="test">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
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
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                <div class="client_slides owl-carousel">
                    <!-- Single Testimonial -->

                    @foreach ($testimonials as $testimonial)
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Image -->
                            <div class="testimonial_image">
                                <img src="{{ $testimonial->image }}" alt="" />
                            </div>
                            <!-- Testimonial Feedback Text -->
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>
                                        {{ $testimonial->description }}
                                    </p>
                                </div>

                                <!-- Admin Text -->
                                <div class="admin_text">
                                    <h5>{{ $testimonial->name }}</h5>
                                    <p>{{ $testimonial->work }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Single Testimonial -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->
