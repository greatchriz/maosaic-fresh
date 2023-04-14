@props([
    'heading',
    'image' => null,
])
<div class="col-12 col-md-6 col-lg-4">

    <!-- Content -->
    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
        <!-- Icon -->

        <div class="mb-3">
            {{ $image }}
        </div>

        <h6 class="bold mb-3">{{ $heading }}</h6>
        <p>
            {{ $slot }}
        </p>
    </div>
</div>
