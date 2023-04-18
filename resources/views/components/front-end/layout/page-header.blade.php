@props(['title' => 'Page Title'])

{{-- attributes merge for style attributes background image --}}

<div class="breadcumb-area" {{ $attributes->merge(['style' => 'background-image: url(../img/bg-img/pca-overdraft-header.png);']) }}>
    <div class="breadcumb-content-img">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        {{-- check if request path has personal-overdraft change w-text class in h2 tag to x-text --}}
                        @if (request()->path() == 'personal-overdraft')
                            <h2 class="x-text title wow fadeInUp" data-wow-delay="0.2s">
                                {{ $title }}
                            </h2>
                        @else
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">
                                {{ $title }}
                            </h2>
                        @endif

                        @if (request()->path() == 'personal-overdraft')
                            <ol class="dark-breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="dark-breadcrumb-item"><a href="/">Home</a></li>
                                <li class="dark-breadcrumb-item active" aria-current="page">
                                    {{ $title }}
                                </li>
                            </ol>
                        @else
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $title }}
                                </li>
                            </ol>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
