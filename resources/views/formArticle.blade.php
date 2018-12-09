@extends('layouts.master')
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
    <div class="row">
    @if(isset($unArticle))
        @if(Session::get('rolecli')== 0)
    <div class="well col-md-12">
        <div class="form-horizontal">
            <div class="col-md-8">
            <div class="form-group">
                <label class="col-md-3 control-label">Nom : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="login" class="form-control" value="{{$unArticle->NOMART}}" readonly>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Description : </label>
                    <div class="col-md-6  col-md-3">
                        <textarea name="login" class="form-control" readonly > {{$unArticle->DESCART}} </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Prix unitaire: </label>
                    <div class="col-md-6  col-md-3">
                        <input type="text" name="login" class="form-control" value="{{$unArticle->PRIXART}} €" readonly>
                    </div>
                </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Prix de livraison : </label>
                <div class="col-md-6 col-md-3">
                    <input type="text" name="pwd" ng-model="pwd" class="form-control" value="{{$unArticle->PRIXLIVRAISON}} €" readonly>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Quantité en stock : </label>
                    <div class="col-md-6 col-md-3">
                        <input type="text" name="pwd" ng-model="pwd" class="form-control" value="{{$unArticle->QTESTOCK}}" readonly>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <img class="" src="../assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}">
            </div>
        </div>
            <center>
            <button type="submit" class="btn btn-default btn-success" onclick="javascript: window.location ='{{ url('/addCart')}}/{{$unArticle->NUMART}}';">
                <span class="glyphicon glyphicon-ok"></span>
                Ajouter au panier
            </button>
            <a class="btn btn-default btn-primary"   href="{{ url()->previous() }}">
                <span class="glyphicon glyphicon-home"></span> Retour </a></center>
    </div>
    </div>
    @else
        <div class="well col-md-12">
            {!! Form::open(['url' => 'validateArticle']) !!}
            <div class="form-horizontal">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nom : </label>
                        <div class="col-md-6  col-md-3">
                            <input type="hidden" name="NUMART" class="form-control" value="{{$unArticle->NUMART or 0}}" >
                            <input type="text" name="NOMART" class="form-control" value="{{$unArticle->NOMART}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Description : </label>
                        <div class="col-md-6  col-md-3">
                            <textarea name="DESCART" class="form-control"  > {{$unArticle->DESCART}} </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Prix unitaire: </label>
                        <div class="col-md-6  col-md-3">
                            <input type="text" name="PRIXART" class="form-control" value="{{$unArticle->PRIXART}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Prix de livraison : </label>
                        <div class="col-md-6 col-md-3">
                            <input type="text" name="PRIXLIVRAISON" class="form-control" value="{{$unArticle->PRIXLIVRAISON}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Quantité en stock : </label>
                        <div class="col-md-6 col-md-3">
                            <input type="text" name="QTESTOCK" class="form-control" value="{{$unArticle->QTESTOCK}}">
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <img class="" src="../assets/img/{{$unArticle->IMGART}}" alt="{{$unArticle->NOMART}}">
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-default btn-success">
                    <span class="glyphicon glyphicon-ok"></span>
                    Valider la modification
                </button>
                <a class="btn btn-default btn-primary"   href="{{ url()->previous() }}">
                    <span class="glyphicon glyphicon-home"></span> Retour </a></center>
        </div>
        </div>
        @endif
    @endif
@endsection