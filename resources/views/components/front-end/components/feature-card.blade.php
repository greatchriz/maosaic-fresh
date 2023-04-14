@props(['heading' => null])

<div class="col-12 col-md-6 col-lg-4">
    <!-- Content -->
    <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
        <!-- Icon -->
        <div class="service_icon">
            {{ $image }}
        </div>
        <h6>{{ $heading }}</h6>
        <p>
            {{ $slot }}
        </p>
    </div>
</div>
