<x-layout>

    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               Inserisci il tuo articolo
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




<form method="POST" action="{{ route('article.store') }}" class="container mt-5" enctype="multipart/form-data">
@csrf
<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="mb-3">
  <label for="title" class="form-label">Titolo</label>
  <input name="title" class="form-control" type="text" placeholder="Scrivi il titolo dell'articolo" aria-label="default input example" id="title" value="{{ old('title') }}">
</div>

<div class="mb-3">
  <label for="subtitle" class="form-label">sottotitolo</label>
  <input name="subtitle" class="form-control" type="text" placeholder="Scrivi il sottotitolo dell'articolo" aria-label="default input example" id="subtitle" value="{{ old('subtitle') }}">
</div>

<div class="mb-3">
  <label for="body" class="form-label">Articolo</label>
  <textarea name="body" class="form-control" type="text" id="body" rows="3" placeholder="Scrivi il corpo dell'articolo">{{ old('body') }}</textarea>
</div>

<div class="mb-3"> 
    @foreach ($tags as $tag)
<div class="form-check">
  <input class="form-check-input" type="checkbox"  name= "tags[]" value="{{ $tag->id }}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    {{ $tag->name }}
  </label>
</div>
    @endforeach
</div>

<div class="mb-3">
  <label for="formFile" class="form-label">Inserisci immagine</label>
  <input class="form-control" type="file" id="formFile" name="img">
</div>

  <button type="submit" class="btn btn-primary btn-sm">Inserisci Articolo</button>

</div>

    


</form>
<!-- fine form di contatto -->
</x-layout>