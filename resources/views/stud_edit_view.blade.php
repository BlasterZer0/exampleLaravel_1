<!Doctype html>
<html>
<head>
<title>Tabla de usuarios</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="d-flex">
                 <div class="mr-auto p-2">{{ __('Usuario') }}</div>
                  <!--<div class="mr-auto p-2"><h3><span class="glyphicon glyphicon-user"></span></h3></div>-->
                 <div class="ml-auto p-2"><a href = "/insert" class="btn btn-success">Nuevo Usuario</a></div>
                </div>
                </div>
<div>
<table border = "1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<!--<td>Contraseña</td>-->
<td>Editar</td>
<td>Eliminar</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<!--<td>{{ $user->password }}</td>-->
<td><a href = 'edit/{{ $user->id }}' class="btn btn-warning">Editar</a></td>
<td><a href = 'delete/{{ $user->id }}' class="btn btn-danger">Borrar</a></td>
</tr>
@endforeach
</table>
</div>
<div>
<link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css rel=stylesheet>
<link href=https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css rel=stylesheet>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
@foreach ($users as $user)
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href = 'edit/{{ $user->id }}' class="btn btn-warning">Editar</a></td>
                <td><a href = 'delete/{{ $user->id }}' class="btn btn-danger">Borrar</a></td>
            </tr>
        </tbody>    
@endforeach
</table>
</div>

                
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html> 
