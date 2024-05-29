<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


  /*footer*/
  .icone_container a i{
    color:white;
    font-size: larger;
    margin-right: 
}
.footer_container{
    z-index: 100 !important;
    bottom: 0;
    height: 6em;
    margin-top: 4em;
    background-image: linear-gradient( 179deg,  rgb(28, 27, 27) 9.2%, rgb(135, 22, 22) 103.9% );
}
.footer_container div{
    margin-left: 5em;
    margin-top: 1em;
}
.footer_container .icone_container::after{
    content:" ";
    position: absolute;
    border: white 1px solid;
    width: 92%;
    display: block;
}
.footer_container div span{
    margin-right: 2em;
    color:white;
    font-size: small;
}
.footer_container .name span{
    font-size: large;
    margin-left: 2em;
}
.footer_container .name{
    margin-left: 52em;
}
.card_container{
    width: 20em;
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

        <?php 
            $check=auth()->user();
            if (isset($check)) {
              echo "<li class='nav-item'>
                <a class='nav-link' href='/get_interface_admin'>Interface</a>
              </li>";
            }else{
              echo "<div class='conteneur_button_navbar'>
          <a href='get_login'><i class='fa fa-user'></i> connecter </a>
          <a href='get_inscription' ><i class='fa fa-user-plus'></i> S'inscrire</a>
            </div>";
            }
        ?>
          </ul>
        </div>
    </nav>
      <div class="margin"></div>

@yield('content')

<div class=" footer_container">
  <div class="icone_container">
      <span>Suivez notre centre</span>
      <a href=""><i class="fa fa-whatsapp"></i></a>
      <a href=""><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-instagram"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a>
      <a href=""><i class="fa fa-youtube"></i></a>
  </div>
  <div class="name"><span>ZAHIR EZZOUINE</span><span>ZAKARIA BENHAMADI</span></div>
</div>
