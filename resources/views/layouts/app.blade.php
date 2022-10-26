<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('Title') - sistema ATM</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Location - ATM - sistem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @if (auth()->check())
                        <li>
                            <p class="nav-link">Bienvenido {{ auth()->user()->name }}</p>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-danger" aria-current="page"
                                href=" {{ route('login.destroy') }}">Salir</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" class="btn btn-success" aria-current="page" href="{{ url('registro') }}">ir a Sistema</a>
                        </li>
                    @else
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Register.index') }}">Registrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.index') }}">Iniciar Sesion</a>
                        </li>
                    @endif
                </ul>
                @if (auth()->check())
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @else
                          
                <h3>Registrarte/inicia para administrar</h3>
                   
                @endif

            </div>
        </div>
    </nav>

    @yield('Content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
