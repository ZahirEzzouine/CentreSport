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
                <th>Titre</th>
                <th>Description</th>
                <th>Envoyer</th>
                <th>Sport</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach ($événements as $événement)
            <tr>
                <td>{{$événement->titre}}</td>
                <td>{{$événement->description}}</td>
                <td>{{$événement->envoyer}}</td>
                <td>{{$événement->get_sport->nom}}</td>
                <td><a href="{{'get_modifier_événement/'.$événement->id}}">Modifier</a></td>
                <td><a href="{{'supprimer_événement/'.$événement->id}}">Supprimer</a></td>
                
            </tr>
            @endforeach
    </table>
    </div>
</body>
</html>

@endsection