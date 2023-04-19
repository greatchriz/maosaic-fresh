<x-front-end.layout.app>

<x-front-end.layout.page-header style="background-image: url(../img/bg-img/faq-banner.jpg);"
        title="F.A.Q." />

{{-- import faq component --}}
<x-front-end.components.faq :faqs="$faqs" />


{{-- impport team component --}}

<x-front-end.sections.team />
</x-front-end.layout.app>

