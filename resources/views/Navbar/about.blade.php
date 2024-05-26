<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos de nous</title>
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }
    .container-about {
        max-width: 800px;
        margin: 50px auto;
        padding:  100px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container-about h2 {
        margin-bottom: 20px;
        color: #333;
    }
    .container-about p {
        margin-bottom: 20px;
        color: #666;
    }
  </style>
</head>
<body>
@extends('layouts.layout')
@section('content')


<div class="container-about">
    <h2>À propos de nous</h2>
    <p>Bienvenue dans notre centre, où nous nous engageons à promouvoir la santé,
         la forme physique et le bien-être de notre communauté.
         Nos installations de pointe et notre personnel
         expérimenté offrent un environnement inclusif pour les athlètes de tous niveaux,
          des débutants aux professionnels.</p>
  </div>

@endsection
</body>
</html>
