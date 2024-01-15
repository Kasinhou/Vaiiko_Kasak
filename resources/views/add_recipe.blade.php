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


</head>
<body>
@include('navbar')
<br>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
            <h4 class="bold">PRIDAJ NOVÝ RECEPT</h4>

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            <form action="addRecipe" method="post">

            @csrf
                <div class="form-group">
                    <label for="exampleInputName">Zadajte názov receptu</label>
                    <input type="text" name="name" class="form-control" placeholder="Názov" value="{{ old('name') }}">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputInfo">Stručne popíšte recept</label>
                    <input type="text" name="info" class="form-control" placeholder="Info" value="{{ old('info') }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputTime">Koľko času zaberie príprava</label>
                    <input type="number" name="time" class="form-control" placeholder="Minúty" value="{{ old('time') }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputOrigin">Odkiaľ pochádza recept</label>
                    <input type="text" name="origin" class="form-control" placeholder="Pôvod" value="{{ old('origin') }}">
                </div>

                <label for="exampleInputName">Vyberte obtiažnosť</label>
                <select class="custom-select" name="difficulty">
                    <option selected value="easy" @if(old('difficulty') == 'easy') selected @endif>Easy</option>
                    <option value="advanced" @if(old('difficulty') == 'advanced') selected @endif>Advanced</option>
                    <option value="masterchef" @if(old('difficulty') == 'masterchef') selected @endif>Masterchef</option>
                </select>

                <label for="exampleInputName">Vyberte typ</label>
                <select class="custom-select" name="type">
                    <option selected value="ina" @if(old('type') == 'ina') selected @endif>Iná</option>
                    <option value="slovenska" @if(old('type') == 'slovenska') selected @endif>Slovenská</option>
                    <option value="talianska" @if(old('type') == 'talianska') selected @endif>Talianska</option>
                    <option value="azijska" @if(old('type') == 'azijska') selected @endif>Ázijská</option>
                    <option value="grecka" @if(old('type') == 'grecka') selected @endif>Grécka</option>
                    <option value="mexicka" @if(old('type') == 'mexicka') selected @endif>Mexická</option>
                </select>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrediencie</label>
                    <textarea class="form-control" name="ingredients" rows="5">{{ old('ingredients') }}</textarea>
                    <span style="color:red">@error('ingredients'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Príprava receptu</label>
                    <textarea class="form-control" name="steps" rows="10">{{ old('steps') }}</textarea>
                    <span style="color:red">@error('steps'){{ $message }} @enderror</span>
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block w-100">Pridaj</button>
                </div>
            </form>
        </div>
        @include('foot')
    </div>
</div>



</body>
</html>