<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        margin: 100px auto;
        width: 350px;
        border: 1px solid black;
        padding: 60px;
        border-radius: 10px;
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
    .div .img{
        width:20px ;
        position: absolute;
        margin: 25px;
        margin-left: 310px;
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


</style>
<body>


    <form action="" class="form">
        @csrf
      <h1>Login</h1> <hr>

        <label for="email">Email</label>
        <div class="div"><img src="image/email.png" class="img"></div>
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <label for="telephone"  >Password</label>
       <div class="div"><img src="image/password.png" class="img"></div>
        <input type="password" name="password" placeholder="password"><br>
        <button class="button">Submit</button>
        <a href="get_inscription" >Inscrire</a>
        <a href="forgot_password" class="a">Mot de passe oublier </a>
    </form>



</body>
</html>
