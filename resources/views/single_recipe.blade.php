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
                <div class="row">
                    <div class="col-3">
                        <div><i class="bi bi-clock-history"></i> {{ $recipe->getTime() }}</div>
                        <div><i class="bi bi-question-circle"></i> {{ $recipe->difficulty }}</div>
                        <div><i class="bi bi-globe-americas"></i> {{ $recipe->origin }}</div><br>
                    </div>
                    <div class="col-9">
                        <div><i class="bi bi-info-circle"></i> {{ $recipe->info }}</div>
                        <div><i class="bi bi-code"></i> {{ $recipe->type }}</div>
                    </div>
                </div>

                <h5 class="bold"><i class="bi bi-list-task"></i> Ingrediencie</h5>
                <p class="ingrediencie">
                    {!! $recipe->ingredients !!}
                </p>
                <br>

            </div>
            <div class="col-12 col-lg-6">
                <br><img class="image-container img-fluid img-recept" src="{{ asset('uploads/recipe/' . $recipe->imgpath) }}" alt="nahlad receptu">
            </div>
        </div><br>
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="toggleHeartAnimation(this)">
            <i class="bi bi-heart" ></i> Uložiť do obľúbených receptov
        </button><br><hr>

        <div class="row">
            <div class="col">
                <h5 class="bold"><i class="bi bi-list-columns-reverse"></i> Postup prípravy</h5>
            </div>
            {{--<div class="col-12">--}}
            <p>{{ $recipe->steps }}<br></p>
            {{-- </div>--}}
        </div><hr>
        <div>
            <div>
                <h6 class="bold">Poznámky autora</h6>
                <div>{{ $recipe->addinfo }}</div>
            </div>
            <div class="vpravo-zarovnanie">
                <button type="button" class="btn btn-outline-info btn-md bold" onclick="pridajTip()">Pridať tip/myšlienku</button>
            </div>
        </div>

    </div>
</main>


@include('foot')
<script>
    function pridajTip() {

    }
</script>

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
