<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>O nás</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('navbar')

<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary shadowCard" style="background-image: url('{{ asset('images/cuisine.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="col-md-10 p-lg-5 mx-auto my-5">
            <h1 class="display-1 fw-bold">Recepty zo všetkých kútov sveta</h1>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-flex flex-md-equal my-md-3 ps-md-3">
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadowCard">
            <div class="my-3 py-3">
                <h2 class="display-5">Vyberte si recept podľa kuchyne ktorú preferujete.</h2>
                <p class="lead"></p>
            </div>
            <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 100%; border-radius: 21px 21px 0 0;">
                <img src="{{ asset('images/cuisines.jpg') }}" class="card-img" style=" border-radius: 21px 21px 0 0;">
            </div>
        </div>
        <br>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadowCard">
            <div class="my-3 p-3">
                <h2 class="display-5">Vaše recepty</h2>
            </div>
            <div class="bg-dark shadow-sm mx-auto d-flex align-items-center" style="width: 80%; height: 80%; border-radius: 21px 21px 0 0;">
                <p class="lead text-center px-5" style="color: white; margin: auto;">Podeľte sa o vaše recepty.<br><br>Pridávajte vlastné recepty a získavajte tipy od odstatných.<br><br>Všetky vaše recepty nájdete pod Moje recepty.</p>
            </div>
        </div><br>
    </div>
    <div class="d-flex flex-md-equal my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadowCard" style="height: 500px;">
            <div class="my-3 p-3">
                <h2 class="display-5">Obľúbené</h2>
            </div>
            <div class="bg-dark shadow-sm mx-auto d-flex align-items-center" style="margin: auto;width: 80%; height: 80%; border-radius: 21px 21px 0 0;">
                <p class="lead text-center px-5" style="color: white; margin: auto;">Ukladajte si obľúbené recepty.<br><br>Všetky obľúbené na jednom mieste.</p>
            </div>
        </div><br>
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadowCard" style="height: 500px;">
            <div class="my-3 py-3">
                <h2 class="display-5">DOBRÚ CHUŤ</h2>
            </div>
            <div class="bg-body-tertiary shadow-sm mx-auto d-flex align-items-center" style="margin: auto;width: 80%; height: 80%; border-radius: 21px 21px 0 0;">
                <p class="lead text-center bold px-5" style="font-size: 22px; color: black; margin: auto;">Prajeme Vám príjemné varenie a pečenie.</p>
            </div>
        </div><br>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadowCard" style="height: 500px;">
            <div class="my-3 p-3">
                <h2 class="display-5">Vyhľadávajte</h2>
            </div>
            <div class="bg-dark shadow-sm mx-auto d-flex align-items-center" style="margin: auto;width: 80%; height: 80%; border-radius: 21px 21px 0 0;">
                <p class="lead text-center px-5" style="color: white; margin: auto;">Neviete nájsť recept?<br><br>Skúste ho vyhľadať priamo cez Vyhľadávanie.</p>
            </div>
        </div>
    </div>
</main>

@include('foot')

</body>
</html>
