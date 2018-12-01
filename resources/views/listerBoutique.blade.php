@extends ('layouts.master')
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
<div class="row">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Raison Sociale</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Voir produits</th>
            </tr>
            </thead>
            @foreach($mesBoutiques as $uneBout)
            <tr>
                <td> {{ $uneBout->RESBOUT }}</td>
                <td> {{ $uneBout->ADRESSEBOUT }}</td>
                <td> {{ $uneBout->VILLEBOUT }}</td>
                <td> {{ $uneBout->CPBOUT }}</td>
                <td> {{ $uneBout->EMAILBOUT }}</td>
                <td> {{ $uneBout->TELBOUT }}</td>
                <td> <a href="{{ url('/listerArticle/boutique')}}/{{$uneBout->NUMBOUT}}">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Acceder"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            <br> <br>
        </table>
</div>
    @endsection