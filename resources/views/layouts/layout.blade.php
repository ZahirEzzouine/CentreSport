<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    nav{
        position: fixed !important;
        position:relative;
        top:0;
        background-image: linear-gradient( 179deg,  rgb(28, 27, 27) 9.2%, rgb(135, 22, 22) 103.9% );
        z-index: 1000;
        width: 100%;
    }
    .container{
        margin-top: 5em;
    }
    a h1 span{
    font-style: italic !important;
    font-size: 1.3em;
    background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
    padding: 2px;
    }
    div ul li{
      font-weight: 900;
      font-size: large;
      margin-left: 2em;
    }
    div ul li a:active{
      color: white !important;
    }
  .conteneur_button_navbar{
    border-radius: 10px;
    margin-left: 12em ;
    margin-right: 2em;
  }
.conteneur_button_navbar a{
    margin-left: 20px !important;
    margin-top: 0 !important;
    font-weight:600;
    color: white ;
    width: 8em !important;
    border: none;
    background-color: transparent;
    box-shadow: 1px 1px 100px 1px rgb(156, 136, 136);
    border-radius: 50px;
    border-bottom: solid rgb(255, 255, 255) 1px;
    padding-bottom:2px; 
    padding-left: 5px;
    padding-right: 5px;
  }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="/"><h1> <span>C</span>entre</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
          </ul>
        </div>
        <div class="conteneur_button_navbar">
          <a href="get_login"><i class="fa fa-user"></i> connecter </a>
          <a href="get_inscription" ><i class="fa fa-user-plus"></i> S'inscrire</a>
      </div>
    </nav>
      <div class="margin"></div>

@yield('content')
