<x-layout>

    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               Modifica il tuo articolo
            </h1>
        </div>
    </div>
</div>


<!-- form di contatto -->

 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif




<form method="POST" action="{{ route('article.update', $article->id) }}" class="container mt-5" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="mb-3">
  <label for="title" class="form-label">Titolo</label>
  <input name="title" class="form-control" type="text" placeholder="Scrivi il titolo dell'articolo" aria-label="default input example" id="title" value="{{ old('title', $article->title) }}">
</div>

<div class="mb-3">
  <label for="subtitle" class="form-label">sottotitolo</label>
  <input name="subtitle" class="form-control" type="text" placeholder="Scrivi il sottotitolo dell'articolo" aria-label="default input example" id="subtitle" value="{{ old('subtitle', $article->subtitle) }}">
</div>

<div class="mb-3">
  <label for="body" class="form-label">Articolo</label>
  <textarea name="body" class="form-control" type="text" id="body" rows="3" placeholder="Scrivi il corpo dell'articolo">{{ old('body', $article->body) }}</textarea>
</div>

<div class="mb-3">
  <label for="formFile" class="form-label">Inserisci immagine</label>
  <input class="form-control" type="file" id="formFile" name="img">
</div>

  <button type="submit" class="btn btn-primary btn-sm">Aggiorna Articolo</button>

</div>

</form>
<!-- fine form di contatto -->

<!-- form di eliminazione -->

<form method="POST" action="{{ route('article.destroy', $article->id) }}" class="container mt-3" onsubmit="return confirm('Sei sicuro di voler eliminare questo articolo?');">
    @csrf
    @method('DELETE')
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <button type="submit" class="btn btn-danger btn-sm">Elimina Articolo</button>
        </div>
    </div>
</form>
<!-- fine form di eliminazione -->

</x-layout>
