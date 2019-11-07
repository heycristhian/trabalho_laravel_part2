<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Edit City</title>
</head>
<body>
        @extends('layouts.main')
        <nav class="nav-bar">
            <p class="h1">EDIT CITY</p>
        </nav>
        
        <div class="container">
        <form method="post" action="{{route('city.update', $city->id)}}">
            {!! method_field('put') !!}
            {{ csrf_field() }}
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="name" type="text" placeholder="Enter name" value="{{ $city->name }}">
            </div>
            @error('name')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">UF</label>
            <div class="control">
                <input class="input" name="uf" type="text" placeholder="Enter UF" value="{{ $city->uf }}">
            </div>
            @error('uf')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="{{ route('city.index')}}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>