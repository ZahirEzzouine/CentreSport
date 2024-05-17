<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    p{
        color: red
    }
    .p{
        color: green
    }
    form{
        align-items: center;
        justify-content: center;
    }
    input{
        width: 100%;
    }
</style>
<body>
    @extends('layouts.layout')
    @section('content')
    <h1>Produit Page For Admin</h1>
    <form action="/Produit" method="post" enctype="multipart/form-data">
        @csrf
        <label for="code_p">Produit code :</label>
        <input type="text" name="code"><br>
        @error('code')
           <p>{{ $message }}</p>
        @enderror

        <label for="p_nom">Produit nom :</label>
        <input type="text" name="nom"><br>
        @error('nom')
            <p>{{ $message }}</p>
        @enderror

        <label for="p_old_prix">Produit Ancien prix :</label>
        <input type="text" name="old_p"><br>
        @error('old_p')
            <p>{{ $message }}</p>
        @enderror

        <label for="prix">Produit prix :</label>
        <input type="text" name="prix"><br>
        @error('prix')
            <p>{{ $message }}</p>
        @enderror

        <label for="image">Produit image :</label>
        <input type="file" name="image"><br>
        @error('image')
            <p>{{ $message }}</p>
        @enderror

        <button class="btn btn-primary">Save</button>
        @if(session('msg'))
            <p class="p">{{ session('msg') }}</p>
        @endif
    </form>
    @endsection
</body>
</html>
