<x-layout>

    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-4">
               Inserisci il prodotto nel magazzino
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


<form method="POST" action="{{ route('products.store') }}" class="container mt-5"  >
@csrf
<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="mb-3">
  <label for="name" class="form-label">nome prodotto</label>
  <input name="name" class="form-control" type="text" placeholder="Scrivi il nome del prodotto" aria-label="default input example" id="name">
</div>

<div class="mb-3">
  <label for="description" class="form-label">descrizione</label>
  <textarea name="description" class="form-control" type="text" id="description" rows="3" placeholder="Scrivi la descrizione del prodotto"></textarea>
</div>

<div class="mb-3">
    <label for="price" class="form-label">prezzo</i></label>
    <div class="form-floating mb-3">
  <input type="number" class="form-control" id="price" placeholder="0" name="price">
  <label for="price">Prezzo (€)</label>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Inserisci Prodotto</button>

</div>

    


</form>
<!-- fine form di contatto -->
</x-layout>