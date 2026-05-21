<x-layout>
    <div class="container-fluid header">
        <div class="row vh-100 align-items-center">
            <div class="col-12 content text-center" id="intro">

                <!-- TERMINAL H1 -->
                <h1 class="display-4 fw-bold terminal-h1">
                    <span class="cmdline">
                        <span class="prompt"></span><span id="cmdPrefix"></span><span id="cursor" class="cursor">_</span>
                    </span>
                    <span class="wordline">
                        <span id="cmdWord" class="rotating-word"></span>
                    </span>
                </h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="header-sub mt-3">
                    Tutto ciò di cui hai bisogno è qui.
                </p>
                <span class="text-white">Il futuro è digitale, il codice è il suo linguaggio.</span>

                <div class="d-flex justify-content-center flex-wrap mt-3">
                    <button class="btn btn-custom btn-red" onclick="window.location.href='{{ route('product.prodotti') }}'">Scopri di più</button>
                    <button class="btn btn-custom btn-blue" onclick="window.location.href='{{ route('product.magazzino') }}'">Click Here</button>
                </div>

            </div>
        </div>
    </div>
</x-layout>
