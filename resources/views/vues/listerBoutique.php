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
            </tr>
            </thead>
            @foreach($mesBoutiques as $uneBout)
            <tr>
                <td> {{ $uneBout->rseBout }}</td>
                <td> {{ $uneBout->adresseBout }}</td>
                <td> {{ $uneBout->villeBout }}</td>
                <td> {{ $uneBout->cpBout }}</td>
                <td> {{ $uneBout->emailBout }}</td>
                <td> {{ $uneBout->telBout }}</td>
            </tr>
            @endforeach
            <br> <br>
        </table>
    </div>
</div>