@extends('layouts.master')
@section('content')
    {!! Form::open(['url' => 'login']) !!}
    <div class="col-md-12 well well-md">
        <center><h1>Entrez votre numéro de carte bancaire</h1></center><hr><br/>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 control-label"><i class="far fa-credit-card"></i>&nbsp;&nbsp;&nbsp;CB : </label>
                <div class="col-md-6  col-md-3">
                    <input type="text" name="cb" class="form-control" placeholder="Votre numéro de carte banquaire" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <br/>
                    <center>
                        <button type="submit" class="btn btn-default btn-primary"><i class="fas fa-check"></i>Valider commande</button>
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
    {!! Form::close() !!}
@stop