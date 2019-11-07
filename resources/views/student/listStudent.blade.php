<?php
  use App\City;
  use App\Year;

  $cities = City::All();
  $years = Year::All();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List Student</title>
</head>
<body>
    @extends('layouts.main')

    <?php
      $rota = 'student';
    ?>

    @extends('layouts.add')

        <nav class="nav-bar">
            <p class="h1">LIST STUDENT</p>
        </nav>
        <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Registration</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Year</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $item)
                  <tr>
                    <th> {{ $item->id }}</th>
                    <th> {{ $item->name }}</th>
                    <th> {{ $item->address }}</th>
                    <th> {{ $item->cpf }}</th>
                    <th> {{ $item->phone }}</th>
                    <th> 
                        <?php                            
                        $cities = City::find($item->city_id);
                        echo $cities->name;
                        ?>
                    </th>
                    <th> 
                        <?php                            
                        $years = Year::find($item->year_id);
                        echo $years->description;
                        ?>
                    </th>
                    <th><a href="{{ route('student.edit', $item->id) }}"> <button type="button" class="btn btn-warning">Edit</button></a></td>
                      <form action="{{route('student.destroy', $item->id)}}" method="post">
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