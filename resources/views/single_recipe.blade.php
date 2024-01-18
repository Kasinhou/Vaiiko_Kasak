<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/heartanimation.js') }}"></script>
</head>
<body>

<!--navbar-->
@include('navbar')

<!--postup pripravy receptu, ingrediecie, info-->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="bold">{{ $recipe->name }}</h2>
                <br>
                <div><i class="bi bi-person-add"></i> {{ optional($recipe->author)->name }}</div>
                <div><i class="bi bi-calendar3"></i> {{ $recipe->getDate() }}</div>
                <br>
                <div><i class="bi bi-clock-history"></i> {{ $recipe->time }}</div>
                <div><i class="bi bi-question-circle"></i> {{ $recipe->difficulty }}</div>
                <div><i class="bi bi-globe-americas"></i> {{ $recipe->origin }}</div><br>

                <h5 class="bold">Ingrediencie</h5>
                <p class="ingrediencie">
                    {!! $recipe->ingredients !!}
                </p>
                <br>

            </div>
            <div class="col-12 col-lg-6">
                <br><img class="image-container img-fluid img-recept" src="{{ asset('images/cuisines.jpg') }}" alt="nahlad receptu">
            </div>
        </div><br>
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="toggleHeartAnimation(this)">
            <i class="bi bi-heart" ></i> Uložiť do obľúbených receptov
        </button><br><hr>

        <div class="row">
            <div class="col">
                <h5 class="bold">Postup prípravy</h5>
            </div>
            <p>{{ $recipe->steps }}<br></p>
        </div>
        <!--pridat mozno nejake obrazky postupu-->

    </div>
</main>


@include('foot')

{{--<script>
    function toggleHeartAnimation(button) {
        let isClickedAlready = button.classList.contains('heartBeat');

        //prida triedu ktoru treba
        if (!isClickedAlready) {
            button.classList.add('heartBeat');
            button.classList.remove('heartBeatBack');

        } else {
            button.classList.add('heartBeatBack');
            button.classList.remove('heartBeat');
        }
    }
</script>--}}
</body>
</html>
