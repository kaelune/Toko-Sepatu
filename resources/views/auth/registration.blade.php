<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepatu App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Toko Sepatu</a>
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

    <div class="container">
        <h2 class="text-center mt-4">My Application</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <h3>Registration as an Admin</h3>

                        <form action="{{ route('registration_submit') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Retype Password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="retype_password" class="form-control" id="inputPassword3">
                                </div>
                            </div>

                            
                            <div style="margin-top:10px;"><input class="btn btn-primary" type="submit" value="Make Registration"></div>                            
                            <br>
                            <p>Already have Account ? Please login
                            <a href="{{ route('login') }}">Login</a>
                             
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

</body>

</html>