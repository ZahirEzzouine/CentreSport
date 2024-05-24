@extends("layouts.layout")
<style>
    .form_container{
        margin-top: 10em !important;
        background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
        margin-top: 5.2em;
        margin-bottom: 10px;
        padding: 1em;
        height: 23em;
        width: 40em !important;
        border-radius: 10px;
        display: flex;
        box-shadow: 2px 2px 50px 10px rgb(0, 0, 0);
        height: 27em;
        z-index: -10 !important;
    }
    .form_container .form{
        margin-left: 6em;
        margin-top: 4em;

    }
    .logo_sport img{
        width: 16em;
        height: 25em;
        border-radius: 10px;
    }
    form input{
        border: none;
        color: rgb(0, 0, 0);
        background-color: white;
        border-bottom: solid 2px;
        outline: none;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 900;
        font-size: larger;
        width:11em !important;
    }
    form div{
        margin-bottom: 1em;
    }
    form .image_sport img{
        width: 10em;
        height: 10em;
        margin-left: 1em;
    }

    form .image_sport{
        margin-top: 2em;
    }
    form .image_sport input{
        width: 7em !important;
        height: 6.7em !important;
        position: absolute;
        top: 18em;
        right: 25em;
        opacity: 0;
    }
    form label{
        position: relative;
        top: 0.4em;
        font-style: italic;
        font-family: Arial, Helvetica, sans-serif;

    }
    .btn{
        background-image: linear-gradient( 181.3deg,  rgba(134,15,15,1) 24.9%, rgba(183,10,10,1) 46.9%, rgba(210,70,0,1) 85.1% );
        font-weight: 900 !important;
        font-size: large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: white !important;
    }

</style>

@section("content")
            <div class="container form_container admin_action">
                <div class="logo_sport">
                    <img src="images/ajouter_sport.jpg" alt="" />
                </div>
                <div class="form">
                    <form action="/ajouter_sport" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="nom_sport">
                            <input type="text" name="nom" placeholder="Nom de sport"/>
                            <span class="erreur_zone"></span>
                        </div>
                        <div class="image_sport" id="image_sport">
                            <label>Telecharger une image ici</label>
                            <img src="images/upload_image.png" id="image_icone" alt="">
                            <input type="file" name="image" id="image_input"/>
                            <span class="erreur_zone"></span>
                        </div>
                        <input type="submit" value="Ajouter" class="btn" />
                    </form>
                </div>
            </div>
            <script>
                    let input=document.getElementById("image_sport");
                    input.addEventListener("click",function(){
                    let image =document.getElementById("image_icone");
                    image.style.transform="scale(0.9)"
                    setTimeout(() => {
                        image.style.transform="scale(1)"
                    }, 1000);
    })
</script>
@endsection
