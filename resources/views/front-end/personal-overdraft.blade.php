<x-front-end.layout.app>
    <!-- ##### Welcome Area Start ##### -->

    {{-- instantiate a component with the following path views/components/front-end/layout/page-header --}}
    <x-front-end.layout.page-header style="background-image: url(../img/bg-img/pca-overdraft-header.png);"
        title="Personal Overdraft" />


    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Our Services Area Start ##### -->
    <section class="section-padding-100-70">


        <div class="container">
            <div class="section-heading text-center">
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">Personal Overdraft</span>
                </div>
                {{-- display array --}}

                <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{ $firstArticle->title }}</h2>
                @foreach ($firstArticle->sections as $section)
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        {!! $section->content !!}
                    </p>
                @endforeach

            </div>


            <x-cards.no-image-card :article="$secondArticle" />
            {{-- <div class="section-heading text-center">

                <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{ $secondArticle->title }}</h2>
                @foreach ($secondArticle->sections as $section)
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        {!! $section->content !!}
                    </p>
                @endforeach
            </div> --}}

            <div class="section-heading text-center">

                <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{ $threeArticle->title }}</h2>

            </div>

            <x-cards.no-image-card :article="$thirdArticle" />

            <x-cards.quote-card :article="$fourthArticle" />

        </div>
    </section>


    <x-sections.check-list-section :article="$fifthArticle" :articleSteps="$fifthArticleSteps" :articleMain="$fifthArticleMain" />

    <section class="section-padding-100-70">


        <div class="container">


            <x-cards.no-image-card :article="$sixthArticle" />

            <x-cards.image-card :article="$seventhArticle" image="interest-charges.png" />

            <x-cards.quote-card :article="$seventhArticleSteps" />


            <x-cards.no-image-card :article="$eightArticle" />

            <x-cards.no-image-card :article="$ninthArticle" />

        </div>
    </section>


</x-front-end.layout.app>
