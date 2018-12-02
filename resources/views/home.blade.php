@extends('layouts.master')
@section('css')
    {!! Html::style('assets/css/carrousel.css') !!}
@endsection
@section('content')
    <center><h1 class="title">Accueil</h1></center>
    <hr/>
    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Catégories</h1>
            <div class="list-group">
                @foreach($mesCatArt as $uneCatArt)
                    <a href="{{url('/listerArticle')}}/{{$uneCatArt->CODECAT_ART}}" class="list-group-item">{{$uneCatArt->LIBELLECAT_ART}}</a>
                @endforeach
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="carrousel">
                <img src="assets/img/carrousel01.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel02.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel03.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel04.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel05.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel06.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel07.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel08.jpg" alt="" style="display: none;"/>
                <img src="assets/img/carrousel09.jpg" alt="" style="display: none;"/>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
    <script src="assets/js/carrousel.min.js"></script>
    <script type="text/javascript">
        (function($) {
            // Les paramètres correspondent aux tailles initiales des images
            // On pourrait aussi récupérer dynamiquement ces valeurs avec un objet Image() javascript
            $('.carrousel').animatethecarousel({
                width : 650,
                height : 330,
            });
        })(jQuery);
    </script>
@endsection