<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jsfunction.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!--navbar-->
@include('navbar')

<!--postup pripravy receptu, ingrediecie, info-->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 id="rid" data-recipeid="{{ $recipe->id }}" class="bold">{{ $recipe->name }}</h2>
                <br>
                <div id="authorInfo" data-userid="{{ $recipe->user_id }}" data-username="{{ optional($recipe->author)->name }}">
                    <i class="bi bi-person-add"></i> {{ optional($recipe->author)->name }}</div>
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
                @if($recipe->imgpath)
                    <br><img class="image-container img-fluid img-recept" src="{{ asset('uploads/recipe/' . $recipe->imgpath) }}" alt="nahlad receptu">
                @endif
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
                <h6 class="bold">Poznámka autora</h6>
                <div>{{ $recipe->addinfo }}</div>
            </div><hr>
            <div id="poznamkyContainer"></div>{{--pridat z db--}}
            <div>
                <textarea id="nazor" class="form-control" name="tip" rows="3" placeholder="Podeľte sa o váš názor..."></textarea>
            </div><br>
            <div class="vpravo-zarovnanie">
                <button type="button" class="btn btn-outline-info btn-md bold" onclick="pridajTip()">Pridať</button>
            </div>
        </div>

    </div>
</main>


@include('foot')
<script>
    function pridajTip() {
        let nazor = document.getElementById('nazor').value;
        let recipeid = document.getElementById('rid').dataset.recipeid;

        if (nazor.trim() !== "") {
            let notes = document.getElementById('poznamkyContainer');
            let divElement = document.createElement('div');
            let userName = document.getElementById('authorInfo').dataset.username;
            let userid = document.getElementById('authorInfo').dataset.userid;
            //console.log(notes, " ", userid, " ", recipeid);
            alert(nazor + " " + userid  + " " + recipeid);

            $.ajax({
                type: 'POST',
                url: '/addTip',
                data: {
                    text: nazor,
                    //user_id: userid,
                    recipe_id: recipeid
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    divElement.innerHTML = `<p>${userName} : ${nazor}</p>`;
                    notes.appendChild(divElement);

                    document.getElementById('nazor').value = "";

                },
                error: function (error) {
                    console.error('Error :', error);
                    alert("Niečo sa pokazilo. Skúste prosím znova.");
                }
            });

        } else {
            alert("Nezdieľate svoj názor.");
        }
    }
</script>
</body>
</html>
