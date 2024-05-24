@extends("layouts.layout")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    nav{
    }
    *{
        margin: 0;
        padding: 0;
    }
    .form_content h1{
        text-align: center;
        font-size: 50px;
        margin: 5px;
        color: black;
    }
    hr{
        width: 100%;
        margin: 30px 0;
    }
    form{
        background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
        margin: 5.5em auto;
        width: 23em;
        border: 1px solid black;
        padding: 20px;
        border-radius: 10px;
        color:white;
        height: 25em;
    }
    form label{
        font-family:'Times New Roman', Times, serif;
    }
    form  input{
        margin: 20px 0;
        width:100% ;
        padding: 5px;
        border-color: transparent transparent black transparent ;
    }
    .button{
        padding: 8px;
        width: 100%;
        color: white;
        border: transparent;
        background-color: #007BFF;
        transition: .9s;
    }
    button:hover{
        background-color: rgb(27, 27, 124);
    }
    form .login i{
        z-index: 100 !important;
        color:black !important;
        position:relative;
        left:18.5em;
        top:1.8em;
    }
    .login{
        display:flex;
    }.get_mot_de_passe_oublier{
        position: relative;
        bottom: 0.7em;
        text-decoration:none;
        color:rgb(55, 0, 255);
        left: 5em;
        font-weight: 500;
    }
</style>
<body>
    <div class="form-content">
        <h1>Login</h1> <hr>
    <form action="" class="form">
        @csrf
        <label for="email">Email</label>
        <div class="login">
            <i class="fa fa-user"></i>
        <input type="email" name="email" placeholder="E-mail">
    </div>
        <br>
        <label for="telephone"  >Password</label>
    <div class="login">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="password">
    </div>
        <a href="get_mot_de_passe_oublier" class="get_mot_de_passe_oublier">Mot de passe oublier </a>
        <button class="button">Submit</button>

    </form>
    </div>
</body>
</html>

@endsection