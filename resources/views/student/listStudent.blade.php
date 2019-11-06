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
                  <tr>
                    <th scope="row">1</th>
                    <td>Cristhian Dias</td>
                    <td>José Conceição, 26. Inocoop</td>
                    <td>450.730.708-28</td>
                    <td>(18) 99741-5398</td>
                    <td>Assis - SP</td>
                    <td>Second</td>
                    <td><a href="{{route('student.edit', 1)}}"> <button type="button" class="btn btn-warning">Edit</button></a></td>
                    <td><button type="button" class="btn btn-danger">Remove</button></td>
                  </tr>                  
                </tbody>
              </table>
</body>
</html>