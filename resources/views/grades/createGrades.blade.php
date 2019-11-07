<?php
    use App\Discipline;
    use App\Teacher;
    use App\Student;

    $disciplines = Discipline::All();
    $teachers = Teacher::All();
    $students = Student::All();
    
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
    <title>Create Grades</title>
</head>
<style>
</style>

<body>
        <nav class="nav-bar">
            <p class="h1">CREATE GRADES</p>
        </nav>
        <div class="container">
        <div class="container">
            <form method="post" action=" {{ route('grade.store') }}">
                    {{ csrf_field() }}
        <div class="field">
                <label class="label">Bimester</label>
                <div class="control">
                    <div class="select">
                    <select name="bimester">
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                    </select>
                    </div>
                </div>
            @error('bimester')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
                <label class="label">Year</label>
                <div class="control">
                    <div class="select">
                    <select name="year">
                            @for ($i = 2019; $i <= 2029; $i++)
                                <option value="{{$i}}"> {{$i}}</option>    
                            @endfor
                                                       
                    </select>
                    </div>
                </div>
            @error('year')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">Teacher</label>
            <div class="control">
                <div class="select">
                <select name="teacher_id">
                    @foreach ($teachers as $item)
                        <option value="{{$item->id}}"> {{ $item->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            @error('teacher')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
    

        <div class="field">
            <label class="label">Student</label>
            <div class="control">
                <div class="select">
                <select name="student_id">
                    @foreach ($students as $item)
                        <option value="{{$item->id}}"> {{ $item->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            @error('student')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">Discipline</label>
            <div class="control">
                <div class="select">
                <select name="discipline_id">
                    @foreach ($disciplines as $item)
                        <option value="{{$item->id}}"> {{ $item->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            @error('discipline')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>

        <div class="field">
            <label class="label">Grade</label>
            <div class="control">
                <input class="input" name="grade" type="number" placeholder="Enter grade" value="{{ old('grade') }}">
            </div>
            @error('grade')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="{{ route('grade.index') }}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>