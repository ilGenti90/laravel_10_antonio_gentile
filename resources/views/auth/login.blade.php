<x-layout>

 <header class= "header">
    <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <h1 class="text-center">
               Accedi al tuo account
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


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class= "col-12 col-md-6 d-flex justify-content-center">
            <form 
            class="p-4 shadow rounded"
            method="POST" 
            action="{{ route('login') }}"
            >
                @csrf

             <div class="form-group">
              <label for="exampleInputEmail1">Indirizzo Email</label>
              <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
             </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password') }}">
             </div>
             
             <button type="submit" class="btn btn-primary">Accedi</button>
            </form>

        </div>
    </div>
</div>    




</x-layout>