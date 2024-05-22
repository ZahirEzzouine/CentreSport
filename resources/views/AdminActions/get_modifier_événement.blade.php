<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body {
    font-family: Arial, sans-serif;
    background-color: #3b3bf0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px  black;
    max-width: 400px;
    width: 100%;
}
@keyframes .container{
 0%{   opacity: 0;
    transform: translateY(-30px) scale(0.9);
}

100%{


}

}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

input{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 16px;
}


button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition:0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container">
        <h2>Modifier Événement</h2>
        <form action="">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" placeholder="Enter description">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
