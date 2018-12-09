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
                        @if(Session::get('id')>0)
                            <div class="card-footer">
                                <div class="col-md-offset-3 btn-primary btn" align="left" onclick="javascript: window.location ='{{ url('/addCart')}}/{{$unArticle->NUMART}}';"><i class="fas fa-plus-circle"></i>Ajouter au panier</div>
                                @if (Session::get('rolecli') > 0)
                                    <hr>
                                    <div class="col-md-offset-3 btn-warning btn" onclick="javascript:window.location = '{{ url('/modifierArticle')}}/{{$unArticle->NUMART}}';"><i class="fas fa-pen"></i>Modifier l'article</div>
                                    <hr>
                                    <div class="col-md-offset-3 btn-danger btn"   onclick="javascript: window.location ='{{ url('/supprimeArticle')}}/{{$unArticle->NUMART}}';"><i class="fas fa-times-circle"></i>Supprimer l'article</div>
                                @endif
                            </div>
                        @endif
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
                        @if(Session::get('id')>0)
                        <div class="card-footer">
                            <div class="col-md-offset-3 btn-primary btn" align="left" onclick="javascript: window.location ='{{ url('/addCart')}}/{{$unArticle->NUMART}}';"><i class="fas fa-plus-circle"></i>Ajouter au panier</div>
                            @if (Session::get('rolecli') > 0)
                                <hr>
                                <div class="col-md-offset-3 btn-warning btn" onclick="javascript:window.location = '{{ url('/modifierArticle')}}/{{$unArticle->NUMART}}';"><i class="fas fa-pen"></i>Modifier l'article</div>
                                <hr>
                                <div class="col-md-offset-3 btn-danger btn"   onclick="javascript: window.location ='{{ url('/supprimeArticle')}}/{{$unArticle->NUMART}}';"><i class="fas fa-times-circle"></i>Supprimer l'article</div>
                            @endif
                        </div>
                            @endif

                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection