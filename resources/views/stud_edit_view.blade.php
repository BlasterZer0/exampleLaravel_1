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
                <div class="card-header">{{ __('Usuarios') }}</div>
                <div>
<table border = "1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Contraseña</td>
<td>Editar</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->password }}</td>
<td><a href = 'edit/{{ $user->id }}'>Editar</a></td>
</tr>
@endforeach
</table>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html> 