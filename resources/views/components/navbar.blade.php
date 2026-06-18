<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top hidden">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">LaravelDB</a>
      
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('product.prodotti') }}">Prodotti</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('product.magazzino') }}">Magazzino</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrati</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Accedi</a>
        </li>
        @endguest


        @auth
        <li class="nav-item">
          <a class="nav-link" href="#"> Welcome {{ Auth::user()->name }} </a>
        </li>
        <li class="nav-item">
          <form class=" nav-link" method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class=" btn btn-link nav-link border-0 p-0">Logout</button>
          </form>
        </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>