<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TechWave Solutions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        section {
            padding: 20px;
            margin: 20px 0;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
        }
        .contact-form button {
            display: inline-block;
            border: none;
            background: #0779e4;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            transition: .5s;
        }
        .contact-form button:hover {
            background: #025cb2;
        }
    </style>
</head>
<body>
 @extends('layouts.layout')

    <section>
        <div class="container">
            <h2>Contact Us</h2>
            <p>We’d love to hear from you! Whether you have a question about our services, our team is ready to answer all your questions.</p>


            <h3>Send Us a Message</h3>
            <form class="contact-form">
                <label for="name">Name</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>
