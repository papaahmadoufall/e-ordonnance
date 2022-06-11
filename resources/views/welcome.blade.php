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
        background-color: rgb(255, 229, 56);
        border:none;
        border-radius: 20px;
        padding: 0 15px;
        width: auto;
        height: 6vh;
    }
</style>
<div class="landing-page">
    <div class="herobanner">
        <div class="txt">
            <p>
                Generateur d'ordonnance
            </p>
        </div>
        <div class="btn"><button class="btn-getstarted">Commencer</button></div>
    </div>
    <div class="section-content">
        <div class="txt-slogan">
            <p>
                simple et facile d'utlisation
            </p>
            <div class="img-bg">
                <img src={{ asset('ordonnancebg.png') }}  alt="">
            </div>
        </div>
    </div>
</div>
@endsection
