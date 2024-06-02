<!DOCTYPE html>
<html lang="en">


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .form {
            margin: 12% auto;
            background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .input-code,
        .input-email {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .input-submit {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .input-submit:hover {
            background-color: #0056b3;
        }
    </style>

    @extends('layouts.layout')
    @section('content')


    <form action="/check_code_verification" method="POST" class="form">
        @csrf
        <label for="email" class="label" >E-mail</label>
        <input type="email" id="email" name="email" class="input-email" placeholder="Entrer votre email"  required>
        <label for="code" class="label">Code</label>
        <input type="text" id="code" name="code_de_recuperation" class="input-code" placeholder="Entrer voter code" required>
        <input type="submit" value="Submit" class="input-submit">
    </form>


