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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Ysim </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link menu-proj" href="{{url('/')}}"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/listerArticle')}}"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/listerPanier')}}"><i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;Panier</a>
                </li>
                @if (Session::get('id') == 0)
                <li class="nav-item">
                    <a class="nav-link menu-proj" href="{{url('/getLogin')}}"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Connexion</a>
                </li>
                @endif
                @if (Session::get('id') > 0)
                    <li class="nav-item">
                        <a class="nav-link menu-proj" href="{{url('/monCompte')}}"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;Mon compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-proj" href="{{url('/histoCmd')}}"><i class="far fa-newspaper"></i>&nbsp;&nbsp;Historiques des commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-proj" href="{{url('/getLogout')}}"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Se deconnecter</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
@yield('content')
    @if (Session::get('id') > 0)
        <hr>
        <div class="row username">
            <div class="col-md-offset-7 col-md-5">
                <a class="nav-link menu-proj" href="{{url('/monCompte')}}"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;{{Session::get('nomcli')}}&nbsp;{{Session::get('nomcli')}}</a>
            </div>
        </div>
    @endif
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; V.Aubert - S.Chevallier - L.Coulomb</p>
    </div>
    <!-- /.container -->
</footer>
@yield('script')
</body>
</html>


