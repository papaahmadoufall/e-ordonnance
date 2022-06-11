<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-ordonnance @yield('title') </title>
</head>
<body>
    <style>
        body{
            font-family: "poppins", sans-serif !important;
            background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background-image: url("storage/bg1.png");
BACKGROUND-SIZE: cover;
height: 100vh;
            background-repeat: no-repeat;
        }
        header>img{
            width: 20%;
        }
    </style>
<div class="body">
    <header class="header">
        <img src={{ asset('logo.png') }} alt="" class="logo">
    </header>
    @yield('content')

</div>
</body>
</html>
