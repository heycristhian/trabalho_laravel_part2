
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Home</title>
</head>
<body>
        

    <header class="max-header">
        <div class="container">
            <div class="logo">
                <img class="img-logo-max" src="../img/logo.png" alt="">
            </div>
            <nav class="nav-bar">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#student">Student</a></li>
                    <li><a href="#teacher">Teacher</a></li>
                    <li><a href="#discipline">Discipline</a></li>
                    <li><a href="#city">City</a></li>
                    <li><a href="#grades">Grades</a></li>
                    <li><a href="{{ route('logout') }}"><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="ghost"></section>

    <main>
        <section id="about">
            <p>About</p>
            

        </section>
        <section id="student">
            <p>Student</p> 
            <div class="colections">
                <a href="{{route('student.create') }}"><img src="../img/add48px.png" alt=""></a>
                <a href="{{ route('student.index') }}"><img src="../img/view48px.png" alt=""></a>
            </div>
        </section>
        <section id="teacher">
            <p>Teacher</p>
            <div class="colections">
                <a href="{{ route('teacher.create') }}"><img src="../img/add48px.png" alt=""></a>
                <a href="{{ route('teacher.index') }}"><img src="../img/view48px.png" alt=""></a>
            </div>
        </section>
        <section id="discipline">
            <p>Discipline</p>
            <div class="colections">
                <a href="{{ route('discipline.create') }}"><img src="../img/add48px.png" alt=""></a>
                <a href="{{ route('discipline.index') }}"><img src="../img/view48px.png" alt=""></a>
            </div>
        </section>
        <section id="city">
            <p>City</p>
            <div class="colections">
                <a href="{{ route('city.create')}}"><img src="../img/add48px.png" alt=""></a>
                <a href="{{ route('city.index') }}"><img src="../img/view48px.png" alt=""></a>
            </div>
        </section>
        <section id="grades">
            <p>Grades</p>            
            <div class="colections">
                <a href="{{ route('grade.create')}}"><img src="../img/add48px.png" alt=""></a>
                <a href="{{ route('grade.index') }}"><img src="../img/view48px.png" alt=""></a>
            </div>
        </section>
    </main>
    <div class="menu-flutuante">
        <a href="#"><img class="seta" src="../img/seta100px.png" alt=""></a>
    </div>
    <script type="text/javascript" src="../js/scripts.js"></script>
</body>
</html>