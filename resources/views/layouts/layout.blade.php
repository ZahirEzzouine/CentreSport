<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        background-image: linear-gradient( 179deg,  rgba(0,0,0,1) 9.2%, rgba(127,16,16,1) 103.9% );
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

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="/"><h1> <span>C</span>entre</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
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
              <li class="nav-item">
                <a class="nav-link" href="get_login">Login</a>
              </li>
          </ul>
        </div>
      </nav>
      <div class="margin"></div>


@yield('content')
