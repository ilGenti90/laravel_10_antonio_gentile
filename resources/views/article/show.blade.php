<x-layout>

    <div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               Articolo: {{ $article->title }}
            </h1>
        </div>
    </div>
</div>
<!-- cards articoli creati -->
<div class="container mt-5 mb-5 ">
    <div class="row justify-content-center align-items-center">
        
            <div class="col-4 col-md-4 ">
                <div class="h-100">
   
<img src="{{ asset('storage/' . $article->img) }}" class="card-img-top mb-4" alt="{{ $article->title }}" style="object-fit:contain; height: 200px;">
    
    

        <h2 class="title mb-4">{{ $article->title }}</h2>
        <h4 class="subtitle mb-3">{{ $article->subtitle }}</h4>
        <p class="text mb-2">{{ $article->body }}</p>
        
    
</div>
            </div>
            
    </div>
</div>

</x-layout>