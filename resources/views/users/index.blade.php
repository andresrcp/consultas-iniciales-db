<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('users.create')}}" class="btn btn-primary mt-3">Crear Nuevo Usuario</a>
            @if(session('status'))
            <div class="alert alert-success mt-3">
                {{session('status')}}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>FECHA DE CREACIÓN</th>
                        <th>FECHA DE ACTUALIZACIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->names}}</td>
                            <td>{{$user->lastnames}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <form action="{{route('users.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <button class="btn btn-sm btn-danger" type="submit">eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="position-relative col-md-12">
            <nav aria-label="pagination">
                {{$users->links()}}
            </nav>
        </div>
    </div>
</div>
</body>
</html>
