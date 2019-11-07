<?php
    use App\City;

    $cities = City::All();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Create Teacher</title>
</head>
<style>
</style>

<body>
        <nav class="nav-bar">
            <p class="h1">CREATE TEACHER</p>
        </nav>
        <div class="container">
            <form method="post" action=" {{ route('teacher.store') }}">
                    {{ csrf_field() }}
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="name" type="text" placeholder="Enter name" value="{{ old('name') }}">
            </div>
            @error('name')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
        

        <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input class="input" name="address" type="text" placeholder="Enter address" value="{{ old('address') }}">
            </div>
            @error('address')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">CPF</label>
            <div class="control">
                <input class="input" name="cpf" type="text" placeholder="Enter CPF" value="{{ old('cpf') }}">
            </div>
            @error('cpf')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">Phone</label>
            <div class="control">
                <input class="input" name="phone" type="number" placeholder="Enter phone" value="{{ old('phone') }}">
            </div>
            @error('phone')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">City</label>
            <div class="control">
                <div class="select">
                <select name="city_id">
                    @foreach ($cities as $item)
                        <option value="{{$item->id}}"> {{ $item->name . ' - ' . $item->uf}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            @error('city')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="{{ route('teacher.index') }}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>