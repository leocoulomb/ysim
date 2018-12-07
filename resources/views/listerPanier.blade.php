@extends ('layouts.master')
@section('content')
    <center><h1 class="title">{{$title}}</h1></center>
    <hr/>
    <div class="row">
        @if(isset($_SESSION['cart']) || !is_null($_SESSION['cart']))
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="tableCmd">Nom</th>
                <th class="tableCmd">Description</th>
                <th class="tableCmd">Prix</th>
                <th class="tableCmd">Frais de port</th>
                <th class="tableCmd">Quantité</th>
                <th class="tableCmd" width="40%">Image</th>
                <th class="tableCmd">Ajouter</th>
                <th class="tableCmd">Suprrimer</th>
            </tr>
            </thead>
            @for($i = 0; $i < count($_SESSION['cart']);$i++)
                <tr>
                    <td class="tableCmd"> {{ $_SESSION['cart'][$i]['name']}}</td>
                    <td class="tableCmd"> {{ $_SESSION['cart'][$i]['desc']}}</td>
                    <td class="tableCmd"> {{$_SESSION['cart'][$i]['price']}}</td>
                    <td class="tableCmd"> {{$_SESSION['cart'][$i]['deliveryPrice']}}</td>
                    <td class="tableCmd"> {{$_SESSION['cart'][$i]['qte']}}</td>
                    <td class="tableCmd" > <img src="../assets/img/{{$_SESSION['cart'][$i]['img']}}" width="200" height="180"></td>
                    <td class="tableCmd"> <a href="{{ url('/addOneItem')}}/{{ $_SESSION['cart'][$i]['id'] }}">
                            <i class="fas fa-plus-circle" title="Ajouter"></i>
                        </a>
                    </td>
                    <td class="tableCmd"> <a href="{{ url('/deleteOneItem')}}/{{ $_SESSION['cart'][$i]['id'] }}">
                            <i class="fas fa-trash-alt" title="Supprimer"></i>
                        </a>
                    </td>
                </tr>
            @endfor
            <br> <br>
        </table>
            @else
            <div class="col-md-offset-3 col-md-7">
                <h1 class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Votre panier est actuellement vide</h1><br>
            </div>
            <div class="col-md-offset-5 col-md-6">
                <button class="btn btn-default btn-primary"
                        onclick="javascript: window.location ='{{ url('/listerArticle')}}';">
                    <i class="fas fa-shopping-cart"></i>Acceder à la boutique</button>
            </div>

        @endif

            <hr/>
    </div>
@endsection