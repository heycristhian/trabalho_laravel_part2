<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List City</title>
</head>
<body>
        @extends('layouts.main')

        <?php
            $rota = 'city';
        ?>

        @extends('layouts.add')

        <nav class="nav-bar">
            <p class="h1">LIST CITY</p>
        </nav>
        <div class="container">
        <table class="table table-hover table-dark table-md-6">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">UF</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $item)
                    <tr>
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->uf }} </td>
                        <td width="2px"><a href="{{ route('city.edit', $item->id) }}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        <form action="{{route('city.destroy', $item->id)}}" method="post">
                                {!! method_field('delete') !!}
                                {{ csrf_field() }}
                                <td width="2px"><button type="submit" class="btn btn-danger">Remove</button></td>    
                        </form>
                    </tr>
                @endforeach                  
            </tbody>
            </table>
        </div>
</body>
</html>