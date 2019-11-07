<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Create Discipline</title>
</head>
<style>
</style>

<body>
        <nav class="nav-bar">
            <p class="h1">CREATE DISCIPLINE</p>
        </nav>

        
        <div class="container">
                <form method="post" action=" {{ route('discipline.store') }}">
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

              
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="{{ route('discipline.index') }}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>
    
    </div>
  
</body>
</html>