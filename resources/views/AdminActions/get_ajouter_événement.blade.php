<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .ajouter_événement_content{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin-top: 5em;
        }
        form {
            background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 2px 2px 50px 10px rgb(0, 0, 0);
            max-width: 400px;
            width: 100%;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        form input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        form input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .form-header p {
            margin: 5px 0 0;
            color: #666;
        }

        @media (max-width: 500px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
    <div class="ajouter_événement_content">
        <form action="/ajouter_événement">
            @csrf
            <div class="form-header">
                <h2>Special Form</h2>
                <p>Please fill in the details</p>
            </div>
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" placeholder="Enter title">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Enter description">
            <select name="sport_id">
                <option value=""></option>
                @foreach ($sports as $sport)
                <option value="{{$sport->id}}">{{$sport->nom}}</option>
                @endforeach
            </select>
            <div class="envoyer">
                <input type="radio" name="envoyer" id="" value="oui"> oui
                <input type="radio" name="envoyer" id="" value="non" checked> non
            </div>
            <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
        </form>
    </div>
    @endsection

</body>
</html>
