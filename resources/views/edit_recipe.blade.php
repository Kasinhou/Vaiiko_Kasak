<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Úprava receptu</title>
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
            <div class="row">
                <div class="col-10">
                    <h4 class="bold">UPRAV RECEPT</h4>
                </div>
                <div class="col-2">
                    <a href="/my_recipes" class="btn btn-outline-dark">Späť</a>
                </div>
            </div>

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
            <form action="{{ route('updateRecipe', ['recipe_id' => $recipe->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputName">Názov receptu</label>
                    <input type="text" name="name" class="form-control" placeholder="Názov" value="{{ old('name', $recipe->name) }}">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputInfo">Stručný popis</label>
                    <input type="text" name="info" class="form-control" placeholder="Info" value="{{ old('info', $recipe->info) }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputTime">Čas prípravy</label>
                    <input type="text" name="time" class="form-control" placeholder="Minúty" value="{{ old('time', $recipe->time) }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputOrigin">Pôvod receptu</label>
                    <input type="text" name="origin" class="form-control" placeholder="Pôvod" value="{{ old('origin', $recipe->origin) }}">
                </div>

                <label for="exampleInputName">Vyberte obtiažnosť</label>
                <select class="custom-select" name="difficulty">
                    <option selected value="začiatočník" @if(old('difficulty', $recipe->difficulty) == 'začiatočník') selected @endif>Začiatočník</option>
                    <option value="pokročilý" @if(old('difficulty', $recipe->difficulty) == 'pokročilý') selected @endif>Pokročilý</option>
                    <option value="masterchef" @if(old('difficulty', $recipe->difficulty) == 'masterchef') selected @endif>Masterchef</option>
                </select>

                @if(isset($cousines))
                    <label for="exampleInputName">Kuchyňa</label>
                    <select class="custom-select" name="cousine_id">
                        @foreach($cousines as $cousine)
                            <option value="{{ $cousine->id }}" @if(old('cousine_id', $recipe->cousine_id) == $cousine->id) selected @endif>
                                {{ $cousine->name }}
                            </option>
                        @endforeach
                    </select>
                @else
                    <a>Kuchyne sa neposlali z nejakeho dovodu</a>
                @endif

                <div class="form-group">
                    <label for="exampleInputType">Typ jedla</label>
                    <input type="text" name="type" class="form-control" placeholder="Typ" value="{{ old('type', $recipe->type) }}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">Vyberte obrázok</label><br>
                        <input type="file" name="imgpath" class="custom-file-input" value="{{ old('imgpath', $recipe->imgpath) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrediencie</label>
                    <textarea class="form-control" name="ingredients" rows="5">{{ old('ingredients', $recipe->ingredients) }}</textarea>
                    <span style="color:red">@error('ingredients'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Postup</label>
                    <textarea class="form-control" name="steps" rows="10">{{ old('steps', $recipe->steps) }}</textarea>
                    <span style="color:red">@error('steps'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Dodatočné poznámky</label>
                    <textarea class="form-control" name="addinfo" rows="3">{{ old('addinfo', $recipe->addinfo) }}</textarea>
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block w-100">Uprav</button>
                </div>
            </form>
        </div>
        @include('foot')
    </div>
</div>
</body>
</html>
