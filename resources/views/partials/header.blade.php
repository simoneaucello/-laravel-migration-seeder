<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-center p-0 ">
        <div class="container-fluid sa_menu p-3">
            <div class="container d-flex align-items-center">
                <a class="navbar-brand text-danger" href="{{ route('home') }}">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="{{ route('trains') }}">Tutti i treni</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>















    {{-- <div class="container text-center my-5">
        <h1>TRAIN STATION</h1>

        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('trains') }}">Treni</a>
    </div> --}}
</header>
