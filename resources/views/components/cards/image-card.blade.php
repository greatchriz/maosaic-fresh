@props(['article', 'image'])

<div class="row">

    @foreach ($article as $section)
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Content -->
            <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                <!-- Icon -->
            <div class="">
                <img src="{{ $section->image_path }}" alt="" />
            </div>
                <h6 class="bold">{{ $section->title }}</h6>
                <p>
                    {!! $section->content !!}
                </p>
            </div>
        </div>
    @endforeach

</div>
