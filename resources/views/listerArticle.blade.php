@extends('layouts.master')
@section('content')
        <center><h1 class="title">{{$title}}</h1></center>
        <hr/>
    <div class="row">
        @if(isset($mesArticlesAndCat))
        @foreach($mesArticlesAndCat as $unArticle)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100" >
                    <img class="card-img-top" src="assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}"
                         onclick="javascript: window.location ='{{ url('/formArticle')}}/{{$unArticle->NUMART}}';">
                    <div class="card-body" onclick="javascript: window.location ='{{ url('/formArticle')}}/{{$unArticle->NUMART}}';">
                        <h4 class="card-title">
                            <a href="#">{{$unArticle->NOMART}}</a>
                        </h4>
                        <h5>{{$unArticle->PRIXART}} €</h5>
                        <p class="card-text">{{$unArticle->DESCART}}</p>
                    </div>
                    <div class="card-footer" onclick="javascript: window.location ='{{ url('/listerArticle')}}/{{$unArticle->CODECAT_ART}}';">
                        <small class="text-muted">{{$unArticle->LIBELLECAT_ART}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
            @if(isset($mesArticlesAndCatByCode))
                @foreach($mesArticlesAndCatByCode as $unArticle)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100" >
                            <img class="card-img-top" src="../assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}"
                                 onclick="javascript: window.location ='{{ url('/formArticle')}}/{{$unArticle->NUMART}}';">
                            <div class="card-body" onclick="javascript: window.location ='{{ url('/formArticle')}}/{{$unArticle->NUMART}}';">
                                <h4 class="card-title">
                                    <a href="#">{{$unArticle->NOMART}}</a>
                                </h4>
                                <h5>{{$unArticle->PRIXART}} €</h5>
                                <p class="card-text">{{$unArticle->DESCART}}</p>
                            </div>
                            <div class="card-footer" onclick="javascript: window.location ='{{ url('/listerArticle')}}/{{$unArticle->CODECAT_ART}}';">
                                <small class="text-muted">{{$unArticle->LIBELLECAT_ART}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
    </div>
@endsection