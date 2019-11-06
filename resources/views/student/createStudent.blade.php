<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Create Student</title>
</head>
<style>
</style>

<body>
        <nav class="nav-bar">
            <p class="h1">CREATE STUDENT</p>
        </nav>

        <form method="post" action=" {{ route('student.store') }}">
            {{ csrf_field() }}
        <div class="container">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="name" type="text" placeholder="Enter name">
            </div>
        </div>

        <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input class="input" name="address" type="text" placeholder="Enter address">
            </div>
        </div>

        <div class="field">
            <label class="label">CPF</label>
            <div class="control">
                <input class="input" name="cpf" type="text" placeholder="Enter CPF">
            </div>
        </div>

        <div class="field">
            <label class="label">Phone</label>
            <div class="control">
                <input class="input" name="phone" type="text" placeholder="Enter phone">
            </div>
        </div>

        <div class="field">
            <label class="label">City</label>
            <div class="control">
                <div class="select">
                <select>
                    <option>Assis - SP</option>
                    <option>Cândido Mota - SP</option>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Year</label>
            <div class="control">
                <div class="select">
                <select>
                    <option>First</option>
                    <option>Second</option>
                    <option>Third</option>
                </select>
                </div>
            </div>
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="../home.html"><button class="button is-link is-light">Cancel</button></a>
            </div>
        </div>
    </div>

    </form>
    
</body>
</html>