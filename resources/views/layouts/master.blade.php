<!doctype html>
<html lang="fr">
<head>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/bootstrap-theme.css') !!}
    {!! Html::style('assets/css/bootstrap_flaty.min.css') !!}
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Ysim</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Acheter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vendre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/listerBoutique') }}">Boutique</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>


