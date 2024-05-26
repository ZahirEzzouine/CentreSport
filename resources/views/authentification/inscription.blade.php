
@extends("layouts.layout")
@section("content")

    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>


<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.content {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    text-align: center;
    margin-top:6em;
}

.form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-row {
    display: flex;
    gap: 20px;
}

.input-group {
    flex: 1;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}



button {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

</style>
<div class="content">
    <div class="form-container">
        <form action="" class="form">
            <h2>Inscription</h2>
            <div class="input-row">
                <div class="input-group">
                    <label for="nom">Nom</label>
                    <input type="text"  name="nom" required>
                </div>
                <div class="input-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel"  name="telephone" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password"  name="password" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email"  name="email" required>
                </div>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</div>

@endsection
