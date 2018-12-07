@extends('layouts.master')
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
    <div class="row">
        <table width="100%" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="tableCmd" width="40%">Image</th>
                <th class="tableCmd">Nom</th>
                <th class="tableCmd">Quantité</th>
                <th class="tableCmd">Prix unitaire</th>
                <th class="tableCmd">Frais de port</th>
                <th class="tableCmd">Prix total</th>
                <th class="tableCmd">Date</th>
                <th class="tableCmd">Date d'arrivée prévu</th>
            </tr>
            </thead>
            @foreach($mesCmd as $item)
                <tr>
                    <td class="tableCmd" align="center"><img src="assets/img/{{$item->IMGART}}" width="200" height="180"></td>
                    <td class="tableCmd" align="center" valign="center">{{ $item->NOMART }}</center> </td>
                    <td class="tableCmd" align="center">{{ $item->QTECMD }}</td>
                    <td class="tableCmd" align="center">{{ $item->PRIXART }} €</td>
                    <td class="tableCmd" align="center"> {{ $item->PRIXLIVRAISON }} €</td>
                    <td class="tableCmd" align="center"> {{ ($item->PRIXART * $item->QTECMD) + $item->PRIXLIVRAISON}}.00 €</td>
                    <td class="tableCmd" align="center">{{Carbon\Carbon::parse($item->DATECMD)->format('d/m/Y')}}</td>
                    <td class="tableCmd" align="center">{{Carbon\Carbon::parse($item->DATEPREVUARRIVE)->format('d/m/Y')}}</td>
                </tr>

            @endforeach
            <br> <br>
        </table>
    </div>
@endsection