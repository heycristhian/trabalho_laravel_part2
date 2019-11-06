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
        <div class="field">
            <label class="label">Bimester</label>
            <div class="control">
                <input class="input" name="bimester" type="text" placeholder="Enter bimester">
            </div>
        </div>

        <div class="field">
            <label class="label">Year</label>
            <div class="control">
                <input class="input" name="year" type="number" placeholder="Enter year">
            </div>
        </div>

        <div class="field">
            <label class="label">Teacher</label>
            <div class="control">
                <div class="select">
                <select>
                    <option>Almir Camolesi</option>
                    <option>Diomara Barros</option>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Student</label>
            <div class="control">
                <div class="select">
                <select>
                    <option>Cristhian Dias</option>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Discipline</label>
            <div class="control">
                <div class="select">
                <select>
                    <option>Linguagem da Programação I</option>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Grade</label>
            <div class="control">
                <input class="input" name="grade" type="number" placeholder="Enter grade">
            </div>
        </div>
              
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Confirm</button>
            </div>
            <div class="control">
                    <a href="listGrades.html"><button class="button is-link is-light">Cancel</button></a>
            </div>
        </div>
    </div>
    
</body>
</html>