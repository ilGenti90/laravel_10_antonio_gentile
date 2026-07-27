<x-layout>

    <div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               I nostri articoli
            </h1>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- form di contatto -->

 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- cards articoli creati -->
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        @foreach($articles as $article)
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100 matrix-card" style="width: 25rem;">
   
<img src="{{ asset('storage/' . $article->img) }}" class="card-img-top" alt="{{ $article->title }}" style="object-fit:contain; height: 200px;">
    
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <h6 class="card-subtitle mb-2">{{ $article->subtitle }}</h6>
        <p class="card-text text-truncate">{{ $article->body }}</p>

        @if ($article->tags->isNotEmpty())
            <div class="mb-2">
                @foreach ($article->tags as $tag)
                    <span class="badge rounded-pill text-bg-light"> #{{ $tag->name }} </span>
                @endforeach
            </div>
            @endif

        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
        <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-secondary">Modifica</a>
    </div>
</div>
            </div>
            
        @endforeach
    </div>
</div>

</x-layout>