    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="lcoul-schev-vaube">

        <title>Ysim</title>

        <!-- Core CSS -->
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/bootstrap-theme.css') !!}
        {!! Html::style('assets/css/bootstrap_flaty.min.css') !!}
        {!! Html::style('assets/css/main.css') !!}

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        @yield('css')

    </head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Ysim </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link menu-proj" href="{{url('/')}}"><i class="fas fa-home"></i>Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/listerBoutique')}}"><i class="fas fa-shopping-cart"></i>Boutiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/listerArticle')}}"><i class="fas fa-shopping-cart"></i>Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/listerPanier')}}"><i class="fas fa-shopping-basket"></i>Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/connexion')}}"><i class="fas fa-user-alt"></i>Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/monCompte')}}"><i class="fas fa-user-alt"></i>Mon compte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
@yield('content')
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; V.Aubert - S.Chevallier - L.Coulomb</p>
    </div>
    <!-- /.container -->
</footer>
</body>
</html>


