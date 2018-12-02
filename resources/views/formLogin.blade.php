@extends('layouts.master')
@section('content')
    {!! Form::open(['url' => 'login']) !!}
    <div class="col-md-12 well well-md">
        <center><h1>Authentification</h1></center><hr><br/>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Identifiant : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="login" class="form-control" placeholder="Votre identifiant" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;Mot de passe : </label>
                <div class="col-md-6 col-md-3">
                    <input type="password" name="pwd" ng-model="pwd" class="form-control" placeholder="Votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <br/>
                    <center>
                    <button type="submit" class="btn btn-default btn-primary"><i class="fas fa-sign-in-alt"></i> Se connecter</button>
                        <a class="btn btn-default btn-danger"   href="{{ url()->previous() }}">
                            <i class="fas fa-arrow-left"></i></span> Retour </a>
                    </center>
                </div>
            </div>
            <small class="text-muted"><a href="{{url('/createAcc')}}">Pas encore inscrit ? Créer un compte</a> </small>

            <div class="col-md-6 col-md-offset-3">
            @include('error')
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop