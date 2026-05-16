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
<div class="container mt-5">
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-md-4 mb-5">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">€{{ $product->price }}</h6>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>