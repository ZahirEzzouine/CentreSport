<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($Produit as $produit)
        <div class="col-4 my-3">
            <div class="card">

                <div class="card-header">
                    <img src=" " width="100%" height="150px">
                    <div class="card-body">
                        <ul class="list-group">

                            <li class="list-group-item">
                                <h2> {{$produit->code}} </h2>
                            </li>

                            <li class="list-group-item">
                                <h2> {{$produit->nom}} </h2>
                            </li>

                            <li class="list-group-item">
                                <b><del>{{$produit->old_p}}</del></b>
                            </li>

                             <li class="list-group-item">
                                <h2>{{$produit->prix}}</h2>
                            </li>
                        </ul>
                </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>
