<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;


}
 body{
    background-repeat: no-repeat;
    background-size: contain;
}

header{
    align-items: center ;
    justify-content:end ;
    display: flex;
    box-shadow: 10px 9px 8px black;
    width: 100%;

    
}
header h1{
    align-items: center ;
    display: flex;
    color: #7e5757;
    padding: 10px;
    margin-right:500px;

}


header ul li{
    display: inline;
    padding: 0 20px;
    text-decoration: none


}
header ul li a{
    color: black;
    text-decoration: none;
    padding: 14px;



}

header h1 span{
    font-style: italic;
    font-size: 1.8em;
    color: var(--color1);
}
span{
    font-style: italic;
    font-size: 1.8em;
    color: #7e5757;


}

a{

    transition: .7s;
}
a:hover{
    background-color: #7e5757;
    color: black;
    text-decoration: none
}

h2{
    text-align: center;
    font-size: xx-large;
    font-size: 100px;
    padding: 0 20px;
    z-index: -1;
}


.wrapper{
    width:100% ;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 100px;
}
.container{
    height: 400px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: start;
}
.card{
    width:80px ;
    border-radius: .75rem;
    background-size: cover;
    cursor: pointer;
    overflow: hidden;
    border-radius: 2rem;
    margin: 0 10px;
    display: flex;
    align-items: flex-end;
    transition: .6s cubic-bezier(.28,-0.03,0,.99);
    box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
}
.card >.row{
    color:white ;
    display: flex;
    flex-wrap: nowrap;
}
.card >.row > .icon {
    background: #223;
    color: white;
    border-radius: 50%;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px;
}
.card >.row > .description {
    display: flex;
    justify-content: center;
    flex-direction: column;
    overflow: hidden;
    height: 80px;
    width: 520px;
    opacity: 0;
    transform: translateY(30px);
    transition: .3s;
    transition: all .3s ease;
}
.description{
    color: #b0b0ba;
    padding-top: 5px;

}
.description h4{
    text-transform: uppercase;
}
input{
    display: none;

}
input:checked + label {
    width:600px  ;
}
input:checked + label .description {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
.card[for='c1']{
    background-image: url('images/imgg.jpg.avif');
}
.card[for='c2']{
    background-image: url('images/img.jpg.avif');
}
.card[for='c3']{
    background-image: url('images/tenis.jpg.jpg');
}
.card[for='c4']{
    background-image: url('images/cricket.jpg.webp');
}
.card[for='c5']{
    background-image: url('images/natation.avif');
}
</style>
<body>

    <header>
        <h1> <span>C</span>entre</h1>

        <ul>
            <li><a href="/chose">About</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/login">Login</a></li>
        </ul>

    </header>

<h2> Welcome to our <span>C</span>entre </h2>

    <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Musculation</h4>
                        <p>To maximize the benefits of musculation, it's important to follow proper training techniques and principles.
                             This includes using correct form during exercises,
                             incorporating a balanced workout routine that targets all major muscle groups,
                             and allowing for adequate rest and recovery between sessions. Nutrition also plays a crucial role,
                             with sufficient protein intake being essential for muscle repair and growth.

                        </p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" checked>
            <label for="c2" class="card">

                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Football</h4>
                        <p> football is more than just a game—it is a global phenomenon that brings people together,
                             promotes unity and diversity,
                            and embodies the spirit of competition, camaraderie, and excellence..</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" checked>
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>image</h4>
                        <p>tennis is a dynamic and engaging sport that combines athleticism, skill, strategy, and sportsmanship.
                            Whether played casually with friends or competitively in tournaments,
                            tennis provides a fulfilling and enjoyable experience for players and fans alike.</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4" checked>
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>Cricket</h4>
                        <p> cricket is a dynamic and captivating sport that combines athleticism, strategy, and sportsmanship.
                             Whether played at the grassroots level or on the international stage,
                              cricket continues to inspire and unite people around the world,
                            making it one of the most cherished and beloved sports globally.</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c5" checked>
            <label for="c5" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4> Natation </h4>
                        <p>Are you ready to make a splash towards a healthier lifestyle?
                             Look no further than our state-of-the-art Sports Center,
                            where we offer top-notch facilities and expert guidance to help you achieve your fitness goals through natation (swimming).</p>
                    </div>
                </div>
            </label>
        </div>

    </div>

</body>
</html>
