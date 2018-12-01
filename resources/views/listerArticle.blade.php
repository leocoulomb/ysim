@extends('layouts.master')
@section('content')
    <div class="row">
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

    </div>
@endsection