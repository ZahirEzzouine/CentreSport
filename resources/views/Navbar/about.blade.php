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
        background-color: #f4f4f4;
    }
    .container-about {
        max-width: 800px;
        margin: 50px auto;
        padding: 50px;
        text-align: center;
        background-color: #fff;
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
    .more-content {
        display: none;
        margin-top: 20px;
    }

    .read-more {
        color: white;
        cursor: pointer;
        background-color:#007BFF;
        padding: 10px;
    }

  </style>
  <script>
    function ReadMore(id) {
      var content = document.getElementById(id);
      if (content.style.display === "none") {
        content.style.display = "block";
      } else {
        content.style.display = "none";
      }
    }
  </script>
</head>
<body>
@extends('layouts.layout')
@section('content')

<div class="container-about">
    <h2>À propos de nous</h2>
    <p>Bienvenue dans notre centre, où nous nous engageons à promouvoir la santé,
         la forme physique et le bien-être de notre communauté.
         Nos installations de pointe et notre personnel expérimenté offrent un environnement inclusif pour les athlètes de tous niveaux, des débutants aux professionnels.</p>
    <span class="read-more" onclick="ReadMore('more1')">Lire la suite</span>
    <div id="more1" class="more-content">
        <p>Nous croyons en l'importance d'une approche holistique pour le bien-être, en fournissant des ressources et des conseils personnalisés pour aider chacun à atteindre ses objectifs personnels.</p>
    </div>
</div>
<div class="container-about">
    <h2>Notre mission</h2>
    <p>Notre mission est de fournir un espace où chacun peut atteindre ses objectifs de santé et de forme physique. Nous croyons en l'importance d'une communauté soudée et de la promotion d'un mode de vie sain pour tous.</p>
    <span class="read-more" onclick="ReadMore('more2')">Lire la suite</span>
    <div id="more2" class="more-content">
        <p>Nous nous engageons à offrir des programmes variés et adaptés à tous les niveaux, afin que chacun puisse trouver une activité qui lui convient et se sente soutenu dans son parcours vers une meilleure santé.</p>
    </div>
</div>

@endsection
</body>
</html>
