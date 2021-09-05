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
    <div class="row">
        <div class="col-6-md">
            <div class="table-responsive">
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table>
                        <thead>
                        <tr><b>editar</b></tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>Nombre</b></td>
                            <td><b>Apellido</b></td>
                            <td><b>Correo</b></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$user->names}}" name="names"></td>
                            <td><input type="text" value="{{$user->lastnames}}" name="lastnames"></td>
                            <td><input type="text" value="{{$user->email}}" name="email"></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Guardar cambios</button>
                    <a href="{{route('users.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
