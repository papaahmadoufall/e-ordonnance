@extends('layout.app')
@section("title")
generateur d'ordonnance
@endsection
@section('content')
<style>
    body{background-image: url("https://res.cloudinary.com/lecroustillant/image/upload/v1654952295/image-le-croustillant%20/bg1_olhkag.png")!important;}
    .listsection{
        /* From https://css.glass */
        display: flex;
    flex-direction: row;
    align-content: space-around;
        background: rgb(173 169 169 / 16%);
    border-radius: 16px;
    box-shadow: inset 0 2px 5px rgb(0 0 0 / 30%);
    backdrop-filter: blur(9.4px);
width: 80vw;
height: 20vh;
margin: auto;
align-items: center;
    }
    div.add-section{
        display: flex;
        flex-direction: column;
        justify-content: center
        ;        margin-left: 2.5vw;
        width: 6vw;
        height: 16vh;
        background: rgb(255 251 251 / 16%);
    border-radius: 8px;
    backdrop-filter: blur(9.4px);
    font-size:30px;
    text-align: center;
    color: white;
    }
    .prescription-form{
        width:auto;
        display: flex;
        flex-direction: row;
    }
    .header-prescription-form {
        background: rgba(78, 78, 78, 0.21);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
    backdrop-filter: blur(8.3px);
    -webkit-backdrop-filter: blur(8.3px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    width: 50vw;
    height: 80vh;
    background: rgb(255 251 251 / 16%);
    margin: 2vw;
    width: 50vw;
    height: 25vh;
    border-radius: 20px;
    align-content: stretch;
    padding: 20px;
    }.header-prescription-form>h3{
        margin-top:-50px;
    }
    .body-prescription-form-btn{
        background: rgba(78, 78, 78, 0.21);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(8.3px);
-webkit-backdrop-filter: blur(8.3px);display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width:20vw !;
        height: 60vh;
        background: rgb(255 251 251 / 16%);
        margin: 2vw;
        width: 50vw;
        height: 25vh;
        border-radius:20px;
    }
    input[type="text"]{
        height:025px;
        border-radius: 20px;
        backdrop-filter: blur(8.3px);
        width: 90%;
        color: black;
border: none;
    }
    .form-group{
        display: flex;
        flex: row;
    justify-content: start;
    }
</style>
<div class="listsection">
<div class="add-section">
    <p> + </p>
</div>
@if ($prescription->count() > 0)
@foreach ($prescription as $prescription)
    <div class="add-section">

        <img src="{{ asset('ordonnancebg.png') }}" alt="">
    </div>
@endforeach
@else<p> Pas d'ordonnance enrigistre</p>

@endif


</div>
<div class="prescription-form">
    <div class="header-prescription-form">


        <h3>Entete de l'ordonnance</h3>
        <form action="">
            <div class="form-group">
                <label for=""></label>
                <input type="text" placeholder="Nom du patient" class="form-control" id="">
            </div>
        <div class="form-group">
            <label for="">M</label>
            <input type="radio" class="form-control" id="">
            <label for="">F</label>
            <input type="radio" class="form-control" id="">
        </form>
    </div>
    </div>
<div class="body-prescription-form-btn">
    <form action="" class="body">
        <button type="submit">enrigistrer</button><br>
        <button type="submit">editer</button><br>
        <button type="submit">visualiser</button>

    </form>
</div>
@endsection
