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
</head>
<body>

<!--navbar-->
@include('navbar')

<!--postup pripravy receptu, ingrediecie, info-->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="bold">Cookies</h3>
                <br>
                <div>
                    <i class="bi bi-question-circle"></i> Obtiažnosť
                </div>
                <div>
                    <i class="bi bi-clock-history"></i> Dĺžka prípravy
                </div>
                <div>
                    <i class="bi bi-globe-americas"></i> Pôvod jedla
                </div><br>

                <h5 class="bold">Ingrediencie</h5>
                <p class="ingrediencie">180 g polohrubá múka<br>
                    130 g práškový cukor<br>
                    125 g maslo<br>
                    1 balíček vanilkový cukor<br>
                    1 ks vajce<br>
                    1 KL kypriaci prášok<br>
                    150 g tmavá čokoláda<br>
                </p>
                <br>

                <button type="button" class="btn btn-sm btn-outline-danger" onclick="toggleHeartAnimation(this)">
                    <i class="bi bi-heart" ></i> Uložiť do obľúbených receptov
                </button><br>

            </div>
            <div class="col-12 col-lg-6">
                <br><img class="image-container img-recept" src="{{ asset('images/cookie.jpg') }}" alt="nahlad receptu">
            </div>
        </div><br><hr>

        <div class="row">
            <div class="col">
                <h5 class="bold">Postup prípravy</h5>
            </div>
            <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce eget est dignissim, varius tellus sit amet, finibus orci.
                Donec imperdiet leo at ex tincidunt hendrerit.<br>
                2. Donec eleifend odio vel urna vestibulum, vitae lobortis mauris rhoncus.
                Ut luctus nisl id luctus porttitor.<br>
                3. Praesent hendrerit nulla et tellus dapibus, non convallis purus venenatis.
                Nunc suscipit nisl sed tellus vestibulum tempor.<br>
                4. Pellentesque egestas leo in justo sollicitudin, porta hendrerit velit ornare.
                Fusce id justo aliquet, gravida est faucibus, euismod erat.
                In et urna placerat, viverra mauris at, placerat quam.<br>
                5. Ut vestibulum orci quis dui egestas facilisis.
                Proin egestas odio sed lorem varius, euismod hendrerit mi aliquam.<br>
                6. Praesent ornare arcu eget pretium egestas.
                Vivamus porta sapien id justo scelerisque, sed posuere arcu ullamcorper.<br></p>
        </div>
        <!--pridat mozno nejake obrazky postupu-->

    </div>
</main>


@include('foot')

<script>
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
</script>
</body>
</html>
