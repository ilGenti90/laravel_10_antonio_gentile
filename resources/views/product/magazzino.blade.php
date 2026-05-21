<x-layout>

    <div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               I nostri prodotti
            </h1>
        </div>
    </div>
</div>
<!-- cards prodotti in magazzino -->
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-md-4 mb-3">
                <x-card :product="$product" />
            </div>
            
        @endforeach
    </div>
</div>

</x-layout>