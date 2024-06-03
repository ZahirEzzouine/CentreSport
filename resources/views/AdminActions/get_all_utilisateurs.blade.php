@extends("layouts.layout")
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .get_all_événement_content{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            margin-top: 10em;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table thead {
            background-color: #007bff;
            color: #fff;
        }



        table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        table tr {
            border-bottom: 1px solid #ddd;
        }

        td a{
            text-decoration: none;
        }
        img{
            height:10em;
            width: 25em;
        }
    </style>
</head>
<body>
    <div class="get_all_événement_content">
    <table>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Numero de telephone</th>
                <th>Age</th>
                <th>Type utilisateur</th>
                <th>Supprimer</th>
            </tr>
            @foreach ($utilisateurs as $utilisateur)
            <tr>
                <td>{{$utilisateur->nom}}</td>
                <td>{{$utilisateur->email}}</td>
                <td>{{$utilisateur->num_phone}}</td>
                <td>{{$utilisateur->age}}</td>
                <td>{{$utilisateur->type_utilisateur}}</td>
                <td><a href="{{'supprimer_utilisateur/'.$utilisateur->id}}">Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</body>
</html>

@endsection