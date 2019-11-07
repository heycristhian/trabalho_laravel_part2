<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List Discipline</title>
</head>
<body>
    @extends('layouts.main')

    <?php
      $rota = 'discipline';
    ?>

    @extends('layouts.add')


        <nav class="nav-bar">
            <p class="h1">LIST DISCIPLINE</p>
        </nav>
        <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($discipline as $item)
                    <tr>
                        <td> {{ $item->name }} </td>
                        <td width="2px"><a href="{{ route('discipline.edit', $item->id) }}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        <form action="{{route('discipline.destroy', $item->id)}}" method="post">
                                {!! method_field('delete') !!}
                                {{ csrf_field() }}
                                <td width="2px"><button type="submit" class="btn btn-danger">Remove</button></td>    
                        </form>
                    </tr>
                @endforeach                        
                </tbody>
              </table>
</body>
</html>