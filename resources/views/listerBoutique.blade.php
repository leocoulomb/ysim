@extends ('layouts.master')
@section('content')

<div>
    <br> <br>
    <br> <br>
    <div class="container">
        <div class="blanc">
            <h1>Liste des Boutiques</h1>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Raison Sociale</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Accès</th>
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
                <td> <a href="{{ url('/boutique')}}/{{$uneBout->NUMBOUT}}">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Acceder"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            <br> <br>
        </table>
    </div>
</div>
    @endsection