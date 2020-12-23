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
                 <!--<div class="mr-auto p-2">{{ __('Usuario') }}</div>-->
                 <div class="mr-auto p-2"><h2><span class="glyphicon glyphicon-user"></span></h2></div>
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
<table data-sort-name=stargazers_count data-sort-order=desc data-toggle=table data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=100&page=1">
<thead>
<tr>
<th data-field=name data-sortable=true>Name
<th data-field=stargazers_count data-sortable=true>Stars
<th data-field=forks_count data-sortable=true>Forks
<th data-field=description data-sortable=true>Description
</thead>
</table>
</div>

                
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html> 
