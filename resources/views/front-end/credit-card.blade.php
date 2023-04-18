<x-front-end.layout.app>
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
        {{-- instantiate a component with the following path views/components/front-end/layout/page-header --}}
        <x-front-end.layout.page-header style="background-image: url('/img/bg-img/credit-card-bg.jpg');" title="Credit Card" />


    </div>
    <!-- ##### Welcome Area End ##### -->

    {{-- insatntiate a cards component located in resources\views\components\front-end\type\cards.blade.php --}}
    <x-front-end.type.cards />

</x-front-end.layout.app>
