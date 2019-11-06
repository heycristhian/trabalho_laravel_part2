<?php
    use App\City;
    $allCities = City::All();

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
            <p class="h1">EDIT TEACHER</p>
        </nav>
        <div class="container">
            <form method="post" action="{{route('teacher.update', $teacher->id)}}">
                    {!! method_field('put') !!}
                    {{ csrf_field() }}
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" name="name" type="text" placeholder="Enter name" value="{{ $teacher->name }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Address</label>
                <div class="control">
                    <input class="input" name="address" type="text" placeholder="Enter address" value="{{ $teacher->address }}">
                </div>
            </div>

            <div class="field">
                <label class="label">CPF</label>
                <div class="control">
                    <input class="input" name="cpf" type="text" placeholder="Enter CPF" value="{{ $teacher->cpf }} ">
                </div>
            </div>

            <div class="field">
                <label class="label">Phone</label>
                <div class="control">
                    <input class="input" name="phone" type="text" placeholder="Enter phone" value="{{ $teacher->phone }}">
                </div>
            </div>

            <div class="field">
                <label class="label">City</label>
                <div class="control">
                    <div class="select">
                    <select name="city_id[]">
                        @foreach ($allCities as $item)
                            @if ($teacher->city_id == $item->id)
                            <option value="{{ $item->id }}" {{in_array($item->id, old("city_id") ?: []) ? "selected": ""}} selected>{{ $item->name }}</option>
                            @else
                            <option value="{{ $item->id }}" {{in_array($item->id, old("city_id") ?: []) ? "selected": ""}}>{{ $item->name }}</option>
                            @endif                                                
                        @endforeach   
                    </select>
                    </div>
                </div>
            </div>
                
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Confirm</button>
                </div>
                <div class="control">
                    <a href="{{ route('teacher.index') }}" class="button is-link is-light">Cancel</a>
                </div>
            </div>
        </form>
        </div>
    
</body>
</html>