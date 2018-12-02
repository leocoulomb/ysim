@extends('layouts.master')
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
    @if(isset($unArticle))
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
            <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-ok"></span>
                Ajouter au panier
            </button>
            <a class="btn btn-default btn-primary"   href="{{ url()->previous() }}">
                <span class="glyphicon glyphicon-home"></span> Retour </a></center>
    </div>
    @endif
@endsection