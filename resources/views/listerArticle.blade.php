@extends('layouts.master')
@section('content')
        <center><h1 class="title">{{$title}}</h1></center>
        <hr/>
    <div class="row">
        @if(isset($mesArticlesAndCatByBout))
            @foreach($mesArticlesAndCatByBout as $unArticle)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../../assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$unArticle->NOMART}}</a>
                            </h4>
                            <h5>{{$unArticle->PRIXART}} €</h5>
                            <p class="card-text">{{$unArticle->DESCART}}</p>
                        </div>
                        <div class="card-footer">
                           <center> <small class="text-muted">Ajouter au panier <span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Acceder"></span></small></center>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($mesArticlesAndCat))
        @foreach($mesArticlesAndCat as $unArticle)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$unArticle->NOMART}}</a>
                        </h4>
                        <h5>{{$unArticle->PRIXART}} €</h5>
                        <p class="card-text">{{$unArticle->DESCART}}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$unArticle->LIBELLECAT_ART}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
            @if(isset($mesArticlesAndCatByCode))
                @foreach($mesArticlesAndCatByCode as $unArticle)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="../assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{$unArticle->NOMART}}</a>
                                </h4>
                                <h5>{{$unArticle->PRIXART}} €</h5>
                                <p class="card-text">{{$unArticle->DESCART}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$unArticle->LIBELLECAT_ART}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
    </div>
@endsection