@extends("layouts.layout")
<style>
    .form_container{
        margin-top: 10em !important;
        background-image: linear-gradient(120deg, #ba750e 0%, #bdf30d 100%);
    margin-top: 5.2em;
    margin-bottom: 10px;
    padding: 1em;
    height: 23em;
    width: 44%;
    border-radius: 10px;
    display: flex;
    box-shadow: 2px 2px 100px 10px rgb(178, 206, 21);
    height: 27em;
    }
    .image_sport img{
        width: 16em;
        height: 6em;
    }
</style>
@section("content")
            <div class="container form_container admin_action">
                <div class="image_sport">
                    <img src="images/ajouter_sport.jpg" alt="" />
                </div>
                <div class="form">
                    <form>
                        <div class="nom_sport">
                            <label>nom de sport</label>
                            <input type="text" />
                            <span class="erreur_zone"></span>
                        </div>
                        <div class="image_sport">
                            <label>image de sport</label>
                            <input type="text"/>
                            <span class="erreur_zone"></span>
                        </div>
                        <input type="submit" value="Ajouter" class="btn border rounded-3 submit" />
                    </form>
                </div>
            </div>
@endsection