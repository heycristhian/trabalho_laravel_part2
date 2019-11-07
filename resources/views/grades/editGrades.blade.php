<?php
    use App\Teacher;
    use App\Discipline;
    use App\Student;

    $allTeachers = Teacher::All();
    $allDisciplines = Discipline::All();
    $allStudents = Student::All();

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
    <title>Edit Grades</title>
</head>
<style>
</style>

<body>
        <nav class="nav-bar">
            <p class="h1">EDIT GRADES</p>
        </nav>
        <div class="container">
            <form method="post" action="{{route('grade.update', $grade->id)}}">
                {!! method_field('put') !!}
                {{ csrf_field() }}
                <div class="field">
                        <label class="label">Bimester</label>
                        <div class="control">
                            <div class="select">
                            <select name="bimester">
                                @if ($grade->bimester == 1)
                                    <option value="1" selected> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                @elseif ($grade->bimester == 2)
                                    <option value="1"> 1</option>
                                    <option value="2" selected> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                @elseif ($grade->bimester == 3)
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3" selected> 3</option>
                                    <option value="4"> 4</option>
                                @elseif ($grade->bimester == 4)
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4" selected> 4</option> 
                                @endif
                                    
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
                                        @if ($grade->year == $i)
                                            <option value="{{$i}}" selected> {{$i}}</option> 
                                        @else
                                            <option value="{{$i}}"> {{$i}}</option> 
                                        @endif
                                           
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
                <select name="teacher_id[]">
                    @foreach ($allTeachers as $item)
                        @if ($grade->teacher_id == $item->id)
                        <option value="{{ $item->id }}" {{in_array($item->id, old("teacher_id") ?: []) ? "selected": ""}} selected>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}" {{in_array($item->id, old("teacher_id") ?: []) ? "selected": ""}}>{{ $item->name }}</option>
                        @endif                                                
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
                <select name="student_id[]">
                    @foreach ($allStudents as $item)
                        @if ($grade->student_id == $item->id)
                        <option value="{{ $item->id }}" {{in_array($item->id, old("student_id") ?: []) ? "selected": ""}} selected>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}" {{in_array($item->id, old("student_id") ?: []) ? "selected": ""}}>{{ $item->name }}</option>
                        @endif                                                
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
                <select name="discipline_id[]">
                    @foreach ($allDisciplines as $item)
                        @if ($grade->discipline_id == $item->id)
                        <option value="{{ $item->id }}" {{in_array($item->id, old("discipline_id") ?: []) ? "selected": ""}} selected>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}" {{in_array($item->id, old("discipline_id") ?: []) ? "selected": ""}}>{{ $item->name }}</option>
                        @endif                                                
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
                <input class="input" name="grade" type="number" placeholder="Enter grade" value="{{ $grade->bimester }}">
            </div>
            @error('grade')
            <p class="help is-danger">{{ $message }}</p>
             @enderror
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Confirm</button>
            </div>
            <div class="control">
                <a href="{{ route('grade.index') }}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>