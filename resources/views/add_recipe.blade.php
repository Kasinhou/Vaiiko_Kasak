<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pridanie receptu</title>
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
            <div class="row justify-content-between">
                <div class="col-9">
                    <h4 class="bold">PRIDAJ NOVÝ RECEPT</h4>
                </div>
                <div class="col-3">
                    <a href="/home" class="btn btn-outline-dark px-3">Domov</a>
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
            <form action="addRecipe" method="post" enctype="multipart/form-data">

            @csrf
                <div class="form-group">
                    <label for="exampleInputName">Názov receptu</label>
                    <input type="text" name="name" class="form-control shadowInput" placeholder="Názov" value="{{ old('name') }}">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputInfo">Stručný popis</label>
                    <input type="text" name="info" class="form-control shadowInput" placeholder="Info" value="{{ old('info') }}">
                    <span style="color:red">@error('info'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputTime">Čas prípravy</label>
                    <input type="text" name="time" class="form-control shadowInput" placeholder="Minúty" value="{{ old('time') }}">
                    <span style="color:red">@error('time'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputOrigin">Pôvod receptu</label>
                    <input type="text" name="origin" class="form-control shadowInput" placeholder="Pôvod" value="{{ old('origin') }}">
                    <span style="color:red">@error('origin'){{ $message }} @enderror</span>
                </div>

                <label for="exampleInputName">Vyberte obtiažnosť</label>
                <select class="custom-select shadowInput" name="difficulty">
                    <option selected value="začiatočník" @if(old('difficulty') == 'začiatočník') selected @endif>Začiatočník</option>
                    <option value="pokročilý" @if(old('difficulty') == 'pokročilý') selected @endif>Pokročilý</option>
                    <option value="masterchef" @if(old('difficulty') == 'masterchef') selected @endif>Masterchef</option>
                </select>

                @if(isset($cousines))
                    <label for="exampleInputName">Kuchyňa</label>
                    <select class="custom-select shadowInput" name="cousine_id">
                        @foreach($cousines as $cousine)
                            <option value="{{ $cousine->id }}" @if(old('cousine_id') == $cousine->id) selected @endif>
                                {{ $cousine->name }}
                            </option>
                        @endforeach
                    </select>
                @else
                    <a>Kuchyne neboli poslane parametrom</a>
                @endif

                <div class="form-group">
                    <label for="exampleInputType">Typ jedla</label>
                    <input type="text" name="type" class="form-control shadowInput" placeholder="Typ" value="{{ old('type') }}">
                    <span style="color:red">@error('type'){{ $message }} @enderror</span>
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">Vyberte obrázok</label><br>
                        <input type="file" name="imgpath" class="custom-file-input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrediencie</label>
                    <textarea class="form-control shadowInput" name="ingredients" rows="5">{{ old('ingredients') }}</textarea>
                    <span style="color:red">@error('ingredients'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Postup</label>
                    <textarea class="form-control shadowInput" name="steps" rows="10">{{ old('steps') }}</textarea>
                    <span style="color:red">@error('steps'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Vaše dodatočné poznámky</label>
                    <textarea class="form-control shadowInput" name="addinfo" rows="3">{{ old('addinfo') }}</textarea>
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block w-100 shadowInput">Pridaj</button>
                </div>
            </form>
        </div>
        @include('foot')
    </div>
</div>

</body>
</html>
