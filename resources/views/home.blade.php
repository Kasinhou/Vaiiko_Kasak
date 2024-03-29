<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recepty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/backgroundImages.js') }}"></script>

</head>
<body>

<!--pozadie obrazky-->
<div id="bgImageContainer"></div>

<div class="bg-text">RECEPTY</div>

@include('navbar')

<!--odseky textu-->
<main>
    <div class="bg-text-secondary bg-text1">1. OBJAVUJTE<br>
        <p class="bg-text-secondary-smaller">nové chute, vône, krajiny</p>
    </div>
    <div class="bg-text-secondary bg-text2">2. ZDOKONAĽUJTE<br>
        <p class="bg-text-secondary-smaller">seba, svoje výtvory</p>
    </div>
    <div class="bg-text-secondary bg-text3">3. VYTVÁRAJTE<br>
        <p class="bg-text-secondary-smaller">vlastné recepty</p>
    </div>
    <div class="bg-text-secondary bg-text4">4. UKLADAJTE<br>
        <p class="bg-text-secondary-smaller">si obľúbené jedlá</p>
    </div>
    <div class="bg-text-secondary bg-text5">5. SLEDUJTE<br>
        <p class="bg-text-secondary-smaller">tipy ostatných ľudí</p>
    </div>
    <div class="bg-text-secondary bg-text6">6. MAJTE<br>
        <p class="bg-text-secondary-smaller">radosť z varenia, pečenia</p>
    </div>

</main>
</body>
</html>

