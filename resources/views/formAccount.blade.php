@extends('layouts.master')
@section('content')
    @if (Session::get('id') == 0)
    {!! Form::open(['url' => 'inscription']) !!}
    @else
        {!! Form::open(['url' => 'updateAcc']) !!}
    @endif
    <div class="row">
    <div class="col-md-12 well well-md">
        <center><h1>{{$title}}</h1></center><hr><br/>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Identifiant : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="login" class="form-control" placeholder="Votre identifiant" value="{{$unClient->LOGINCLI or ''}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;Mot de passe : </label>
                <div class="col-md-6 col-md-3">
                    <input type="password" name="pwd" class="form-control" value="{{$unClient->PWDCLI or ''}}" placeholder="Votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Nom : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom" value="{{$unClient->NOMCLI or ''}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Prénom : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" value="{{$unClient->PRENOMCLI or ''}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;Adresse : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="adresse" class="form-control" placeholder="Votre adresse" value="{{$unClient->ADRESSECLI or ''}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;Ville : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="ville" class="form-control" placeholder="Votre ville" value="{{$unClient->VILLECLI or ''}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;Code postal : </label>
                <div class="col-md-6  col-md-3">
                    <input type="number" name="cp" class="form-control"  max="99999" placeholder="Votre code postal" value="{{$unClient->CPCLI or 0}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;Téléphone : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="tel" class="form-control"  maxlength="10" placeholder="Votre numéro de téléphone" value="{{$unClient->TELCLI or '0600112233'}}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <br/>
                    <center>
                        <button type="submit" class="btn btn-default btn-primary"><i class="fas fa-sign-in-alt"></i>
                            @if(Session::get('id') == 0)
                                S'incrire
                        @else
                                Modifier
                            @endif
                        </button>
                        <a class="btn btn-default btn-danger"   href="{{ url()->previous() }}">
                            <i class="fas fa-arrow-left"></i></span> Retour </a>
                    </center>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                @include('error')
            </div>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@stop