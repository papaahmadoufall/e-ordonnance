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
        width: 90vw;
    display: flex;
    flex-direction: row;
    height: auto;
    margin: auto;
    justify-content: center;
    }
    .header-prescription-form {
        background: rgba(78, 78, 78, 0.21);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
    backdrop-filter: blur(8.3px);
    -webkit-backdrop-filter: blur(8.3px);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    width: 0vw;
    height: 90vh;
    background: rgb(255 251 251 / 16%);
    margin: 2vw;
    width: 50vw;
    height: 30vh;
    border-radius: 20px;
    padding: 10px 0 10px 10px;
    }.header-prescription-form>h3{
        margin-top:50px;
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
        width: 300px;
        height: 33vh;
        border-radius:20px;
    }
    .body-prescription-form{

        background: rgba(78, 78, 78, 0.21);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(8.3px);
-webkit-backdrop-filter: blur(8.3px);
width: 90vw;
margin: auto;
    }
    input[type="text"]{
        height:025px;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.461);
        backdrop-filter: blur(8.3px);
        width: 40vw;
        padding-left:10px;
        color: black;
border: none;
    }
    .form-group{
        display: flex;
        flex: row;
    justify-content: start;
    }
    button{
        width: 100px;
        border: none;
        border-radius: 20px;
        background-color: #ffec70;
        height: 30px;
        margin-bottom: 10px;
    }
    .name{
        width: 25vw !important;
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
       <P style="font-size:small">
        Nom de l'etablissement <br>
        Adresse de l'etablissement <br>
        telephone de l'etablissement <br>
       </P>

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
</div>
<div class="body-prescription-form">
    <div class="container">
        <form action="{{ url('store-input-fields') }}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif
            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input class="name" id="name" type="text" name="addMoreInputFields[0][subject]" placeholder="Nom medicament" class="form-control" />
                    </td>
                    <td><input class="name"  type="text" style='width=10vw !important"' name="addMoreInputFields[0][subject]" placeholder="Qte" class="form-control" />
                    </td>
                    <td><input class="name"  style='width="50vw"' type="text" name="addMoreInputFields[0][subject]" placeholder="Posologie" class="form-control" />
                    </td>
                    <td><button   type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
        </form>
    </div>
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>

</div>
@endsection
