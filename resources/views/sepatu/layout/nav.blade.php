<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Toko<span class="text-danger">Pilar</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active"  href="{{ route('dashboard') }}">Home</a>

                    <div class="dropdown-center">
                        <a class=" nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin, {{ Auth::guard('web')->user()->name }}
                        </a>
                        
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>

    </nav>
</div>