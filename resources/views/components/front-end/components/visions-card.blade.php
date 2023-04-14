@props(['heading'])
<div class="services-block-four v2 mt-30">
    <div class="inner-box"  style="padding-left: 0px">

        <h3>
            <a href="#">{{ $heading }}
            </a>
        </h3>
        <div class="text width-80">
            {{ $slot }}
        </div>
    </div>
</div>
