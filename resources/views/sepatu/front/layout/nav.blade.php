<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Toko Pilar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="{{ route('login') }}" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" aria-current="{{ route('registration') }}" href="{{ route('registration') }}">Register</a>
                    
                </div>
            </div>
        </div>

    </nav>
</div>