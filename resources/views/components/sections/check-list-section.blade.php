@props(['article', 'articleSteps', 'articleMain'])

<section class="section-padding-0-0 relative clearfix mb-30" style="margin-top: -50px">
    <div class="container">
        <div class="has-shadow agency-sec">
            <div class="row">
                <div class="col-12">
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f1.svg" alt="" />
                            </div>
                            <h3>
                                <a href="#">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            {{-- foreach fiftharticle main content --}}
                            @foreach ($articleMain as $section)
                                <div class="text">
                                    {!! $section->content !!}
                                </div>
                            @endforeach


                            @foreach ($articleSteps as $section)

                                <div class="side-feature-list-item v2 my-30">
                                    <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                                    <div class="foot-c-info">{!! $section->content !!}</div>
                                </div>
                            @endforeach
                            {{-- <div class="side-feature-list-item v2">
                                <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Innovative Solutions</div>
                            </div>
                            <div class="side-feature-list-item v2">
                                <i class="fa fa-check check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Online Mobile Banking</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
