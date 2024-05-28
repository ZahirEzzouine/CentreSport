<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .interface-content{
        margin-top: 10em;
        display: flex;
        justify-content: center;
        height:53vh;
    }
    .interface-content .card_container{
        box-sizing: border-box;

    }
    .card{
        height: 10em !important;
        border: solid rgb(97, 16, 16) 1px !important;
    }
    .btn{
        background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
    }
</style>
<body>
@extends('layouts.layout')
@section('content')
    <div class="interface-content">
        <div class="container card_container">
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title">Ajouter un nouveau sport</h4>
                    <a href="/get_ajouter_sport" class="btn border rounded-3 ">Ajouter</a>
                </div>
            </div>
        </div>
            <div class="container card_container">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="card-title">Ajouter un nouveau événement</h4>
                        <a href="/get_ajouter_événement" class="btn border rounded-3 ">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="container card_container">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="card-title">Afficher tous les événements</h4>
                        <a href="/get_all_événements" class="btn border rounded-3 ">Afficher</a>
                    </div>
                </div>
            </div>
            <div class="container card_container">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="card-title">Afficher tous les sports disponible</h4>
                        <a href="/get_all_sports" class="btn border rounded-3 ">Afficher</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
</body>
</html>

