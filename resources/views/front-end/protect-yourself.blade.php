<x-front-end.layout.app>
    <!-- ##### Welcome Area Start ##### -->

    {{-- instantiate a component with the following path views/components/front-end/layout/page-header --}}
    <x-front-end.layout.page-header style="background-image: url(../img/bg-img/protect-yourself-banner.jpg);"
        title="Protect  Yourself" />



    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Our Services Area Start ##### -->
    <section class="section-padding-100-70">


        <div class="container">
            <div class="section-heading text-center">
                <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                    @foreach ($tenthArticle->sections as $section)
                        <span class="gradient-text blue">{{ $section->title }}</span>
                    @endforeach
                </div>
                {{-- display array --}}

                {{-- <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{ $firstArticle->title }}</h2> --}}

                @foreach ($tenthArticle->sections as $section)
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        {!! $section['content'] !!}
                    </p>
                    <img src="{{ $section->image_path }}" alt="" style="max-width: 200px; width: 100%;">
                @endforeach



            </div>

            {{-- import card image component --}}
            <x-cards.image-card :article="$eleventhArticle" image="interest-charges.png" />

            <x-cards.image-card :article="$twelveArticle" image="interest-charges.png" />

            <x-cards.image-card :article="$thirteenArticle" image="interest-charges.png" />

        </div>
    </section>



</x-front-end.layout.app>
