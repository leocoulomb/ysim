@extends ('layouts.master')
@section('panier')
    <span class="sr-only">(current)</span>
@endsection
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
    <div class="row">
        <table class="table table-bordered table-striped table-responsive">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Frais de port</th>
                <th>Quantité</th>
                <th>Image</th>
                <th>Ajouter</th>
                <th>Suprrimer</th>
            </tr>
            </thead>
            @foreach($mesArticles as $item)
                <tr>
                    <td> {{ $item->NOMART }}</td>
                    <td> {{ $item->DESCART }}</td>
                    <td> {{ $item->PRIXART }}</td>
                    <td> {{ $item->PRIXLIVRAISON }}</td>
                    <td> {{ $item->QTESTOCK }}</td>
                    <td> <img href="../assets/img/ {{ $item->IMGART }}"></td>
                    <td> <a href="{{ url('/addOneItem')}}/{{ $item->NOMART }}">
                            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Acceder"></span>
                        </a>
                    </td>
                    <td> <a href="{{ url('/deleteOneItem')}}/{{ $item->NOMART }}">
                            <span class="glyphicon glyphicon-circle-arrow-right" data-toggle="tooltip" data-placement="top" title="Supprimer"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            <br> <br>
        </table>
    </div>
@endsection