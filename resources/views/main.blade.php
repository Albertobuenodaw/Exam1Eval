<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style>
        ul{
            display:flex;
            flex-direction:row;
            justify-content:center;
            list-style: none;
        }
        li{
            margin-left:100px;
        }
      
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href='pilot'>Create Pilot</a></li>
                <li><a href='team'>Create Team</a></li>
                <li><a href='team'>Asign Team to a Pilot</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <div class = "container">
    @yield('content')
    </div>
</body>
</html>