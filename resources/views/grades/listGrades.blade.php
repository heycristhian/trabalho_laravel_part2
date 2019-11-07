<?php
  use App\Teacher;
  use App\Student;
  use App\Discipline;

  $teachers = Teacher::All();
  $students = Student::All();
  $disciplines = Discipline::All();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List Grades</title>
</head>
<body>
    @extends('layouts.main')

    <?php
      $rota = 'grade';
    ?>

    @extends('layouts.add')


        <nav class="nav-bar">
            <p class="h1">LIST GRADES</p>
        </nav>
        <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Bimester</th>
                    <th scope="col">Year</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Student</th>
                    <th scope="col">Discipline</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($grade as $item)
                  <tr>
                    <th> {{ $item->bimester }}</th>
                    <th> {{ $item->year }}</th>
                    <th>
                        <?php                            
                        $teachers = Teacher::find($item->teacher_id);
                        echo $teachers->name;
                        ?>
                    </th>
                    <th>
                        <?php                            
                        $students = Student::find($item->student_id);
                        echo $students->name;
                        ?>
                    </th>
                    <th>
                        <?php                            
                        $disciplines = Discipline::find($item->discipline_id);
                        echo $disciplines->name;
                        ?>
                    </th>
                    <th><a href="{{ route('grade.edit', $item->id) }}"> <button type="button" class="btn btn-warning">Edit</button></a></td>
                      <form action="{{route('grade.destroy', $item->id)}}" method="post">
                          {!! method_field('delete') !!}
                          {{ csrf_field() }}
                          <th width="2px"><button type="submit" class="btn btn-danger">Remove</button></td>    
                      </form>
                  </tr>        
                  @endforeach          
                </tbody>
              </table>
</body>
</html>