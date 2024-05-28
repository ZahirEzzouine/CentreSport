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
            background: linear-gradient(135deg, rgb(180, 144, 159), #aaf);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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
        <form action="/get_ajouter_événement">
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
                @foreach ($sports as $sport)
                <option value="{{$sport->id}}">{{$sport->nom}}</option>
                @endforeach
            </select>
    
            <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
        </form>
    </div>
    @endsection

</body>
</html>
