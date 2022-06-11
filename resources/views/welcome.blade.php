@extends('layout.app')
@section('content')
<style>
    .herobanner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 60vw;
        height: 60vh;
/* From https://css.glass */
background: rgba(255, 255, 255, 0.31);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(9px);
-webkit-backdrop-filter: blur(9px);
border: 1px solid rgba(255, 255, 255, 0.22);
        margin:50px auto;
        border-radius:20px;

    }
    div.txt>p{

        text-align: center;
        text-align: "center";
        font-size:70px;
        color: #fff
    }
    div.btn > .btn-getstarted{
        margin-bottom: 10vh;
        background-color: #ffec70;
        border:none;
        border-radius: 20px;
        padding: 0 35px;
        width: auto;
        height: 6vh;
        cursor: pointer;
        font-weight: 500;
        font-family: "poppins";
        transition: ease-in-out .2s;


    }
    div.btn > .btn-getstarted:hover{
        background-color: #eed740;
        color: #000;
        border: rgba(0, 0, 0, 0.379);
        transform: scale(1.1)

    }
    div.txt-slogan{
        margin:20% 0 0 5%;
        text-align:left;
        font-size:80px;
        color: #fff;
    }
</style>
<div class="landing-page">
    <div class="herobanner">
        <div class="txt">
            <p>
                Generateur d'ordonnance
            </p>
        </div>
        <div class="btn"><button class="btn-getstarted"> <a href="{{route('prescription.index')}}"> Commencer</a></button></div>
    </div>
    <div class="section-content">
        <div style="height: 70vh" class="txt-slogan">
            <p>
                Simple et <br> facile d'utlisation
            </p>

        </div>
    </div>
</div>
@endsection
