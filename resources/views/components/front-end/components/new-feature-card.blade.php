@props(['heading'])
<div class="services-block-four v2 mt-30">
    <div class="inner-box">
        <div class="icon-font-box">
            <i class="fa fa-check"></i>
        </div>
        <h3>
            <a href="#">{{ $heading }}
            </a>
        </h3>
        <div class="text width-80">
            {{ $slot }}
        </div>
    </div>
</div>
