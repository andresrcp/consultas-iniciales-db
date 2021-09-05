<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-md-6">
        <div class="table-responsive mt-3">
            <table class="table">
                <tr>
                    <td><b>Nombres</b></td>
                    <td>{{$user->names}}</td>
                </tr>
                <tr>
                    <td><b>Apellidos</b></td>
                    <td>{{$user->lastnames}}</td>
                </tr>
                <tr>
                    <td><b>Correo</b></td>
                    <td>{{$user->email}}</td>
                </tr>
            </table>
            <hr>
            <a href="{{route('users.index')}}" class="btn btn-md btn-primary">Ir al inicio</a>
        </div>
    </div>
</div>
</body>
</html>
