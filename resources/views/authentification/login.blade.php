<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    h1{
        text-align: center;
        font-size: 50px;
        margin: 5px;
    }
    hr{
        width: 100%;
        margin: 30px 0;
    }
    form{
        background-image: linear-gradient( 109.6deg,  rgba(15,2,2,1) 11.2%, rgba(36,163,190,1) 91.1% );
        margin: 100px auto;
        width: 350px;
        border: 1px solid black;
        padding: 60px;
        border-radius: 10px;
        color:white;
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

    .a{
        margin: 15px;
    }
    a{
        text-decoration:none;
        color:white;
    }
    i{
        z-index: 100 !important;
        color:black !important;
        position:relative;
        left:20em;
        top:1.5em;
    }
    .login{
        display:flex;
    }
</style>
<body>


    <form action="" class="form">
        @csrf
      <h1>Login</h1> <hr>

        <label for="email">Email</label>
        <div class="login">
            <i class="fa fa-user"></i>
        <input type="email" name="email" placeholder="E-mail">
    </div>
        <br>
        <label for="telephone"  >Password</label>
        <div class="login">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="password"></div>
        <button class="button">Submit</button>
        <a href="get_inscription" >Inscrire</a>
        <a href="forgot_password" class="a">Mot de passe oublier </a>
    </form>



</body>
</html>
