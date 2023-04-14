<section class="section-padding-100-70 d-sec">
    <div class="container">
        <div class="section-heading text-center">
            <div class="mb-15 justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span class="gradient-text blue">OUR SERVICES</span>
            </div>
            <h2 class="wow fadeInUp w-text" data-wow-delay="0.3s"
                style="
        visibility: visible;
        animation-delay: 0.3s;
        animation-name: fadeInUp;
      ">
                Our Core Services
            </h2>
            <p class="wow fadeInUp g-text" data-wow-delay="0.4s"
                style="
        visibility: visible;
        animation-delay: 0.4s;
        animation-name: fadeInUp;
      ">
                Services that will make your money grow. Earn interest while enjoying your freedom to spend.
            </p>
        </div>

        <div class="row">

            {{-- card component --}}
            <x-front-end.components.service-card heading="Save">

                <x-slot:image>
                    <img src="img/icons/s1.jpg" alt="" />
                </x-slot>
                A first step towards a strong financial foundation is to save. Start a savings account in the Philippines and let Crownagent guide you through it.
            </x-front-end.components.service-card>
            {{-- end card component --}}

            {{-- card component --}}
            <x-front-end.components.service-card heading="Manage">

                <x-slot:image>
                    <img src="img/icons/s2.png" alt="" />
                </x-slot>
                    Bank at your convenience. Use your smartphone or PC to access your accounts, send money, trade, and pay bills.
            </x-front-end.components.service-card>
            {{-- end card component --}}

            {{-- card component --}}
            <x-front-end.components.service-card heading="Invest">

                <x-slot:image>
                    <img src="img/icons/s3.png" alt="" />
                </x-slot>
                Set your personal financial objectives so you can make the right investment choices.
            </x-front-end.components.service-card>
            {{-- end card component --}}




        </div>
    </div>
</section>
