@extends('layouts.master')
@section('content')
    <div class="alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <p> Voici l'erreur : {{ $monErreur }}</p>
    </div>
@endsection
<div class="row">
    @foreach($mesArtciles as $unArticle)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{$unArticle->NOMART}}</a>
                    </h4>
                    <h5>{{$unArticle->PRIXART}} €</h5>
                    <p class="card-text">{{$unArticle->DESCART}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>
    @endforeach

</div>