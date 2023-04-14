@props([
    'heading' => null,
    'step' => null,
])

<!--Services Block Four-->
<div class="services-block-four how">
    <div class="inner-box">
        <div class="step">{{ $step }}</div>
        <h3>
            <a class="normal" href="#">{{ $heading }}</a>
        </h3>
        <div class="text">
            {{ $slot }}
        </div>
    </div>
</div>
