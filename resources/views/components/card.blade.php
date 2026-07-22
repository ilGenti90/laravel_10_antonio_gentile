 <div class="card h-100 matrix-card" style="width: 25rem;">
     <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="{{ $product->name }}" style="object-fit:contain; height: 200px;">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <h6 class="card-subtitle mb-2">€{{ $product->price }}</h6>
        <p class="card-text text-truncate">{{ $product->description }}</p>
        <p class="card-text"> Creato da: {{$product->user->name}}</p>
    </div>
</div>