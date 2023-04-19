@props(['article'])

<div class="row">
    @foreach ($article as $section)
        <div class="col-12">
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
                <!-- Testimonial Image -->

                <!-- Testimonial Feedback Text -->
                <div class="testimonial-description">
                    <div class="testimonial_text">
                        <p>
                            {!! $section->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
