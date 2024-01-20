<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Výsledky hľadania</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('navbar')

<main>
    <h3 class="vpravo-zarovnanie bold">Nájdené recepty</h3><br>
    <div id="searched" class="row g-2">

    @if($recipes->isNotEmpty())
        @foreach ($recipes as $recipe)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title bold infocard text-center">{{ $recipe->name }}</h5>
                        <p class="card-text italic infocard">{{ $recipe->info }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item italic"><i class="bi bi-globe-americas"></i> {{ $recipe->cousine->name }} kuchyňa</li>
                    </ul>
                    <div class="card-body text-end">
                        <a href="/recipe/{{ $recipe->id }}" class="recipelink"><i class="bi bi-three-dots"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div>
            <p class="text-center bold">Žiadne výsledky pre zadaný výraz sa nenašli.</p>
        </div>
    @endif
    </div>
</main>

@include('foot')

</body>
</html>
