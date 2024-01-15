<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prehľad receptov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('navbar')

<main>
    <h3 class="vpravo-zarovnanie bold">Moje recepty</h3><br>
    <div id="myContainer" class="row g-2"></div>

    {{--<div class="col-md-6 mb-3">
        <div class="card mx-auto">
            <div class="row g-0">
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/cookie.jpg') }}" class="img-fluid rounded-start" alt="obrazok receptu">
                </div>
            </div>
        </div>
    </div>--}}

</main>

@include('foot')

<script>
    let cardContainer = document.getElementById('myContainer');

    for (let i = 0; i < 7; i++) {
        let divElement = document.createElement('div');
        //divElement.className = '';

        divElement.innerHTML = `
                    <div class="card mx-4">
                        <div class="row g-0">
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="bottom-card">
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        <a href="recipe" class="card-link">Zobraziť celý recept</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <img src="{{ asset('images/cookie.jpg') }}" class="img-fluid rounded-start" alt="obrazok receptu">
                            </div>
                        </div>
                    </div>`;

        cardContainer.appendChild(divElement);
    }
</script>
</body>
</html>
