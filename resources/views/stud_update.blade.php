<!DOCTYPE html>
<html>
<head>
<title>Student Management | Edit</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>
                <div>
<div>
<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Nombre</td>
<td>
<input type = 'text' name = 'name'
value = '<?php echo$users[0]->name; ?>'/>
</td>
</tr>
<tr>
<td>Correo Electrónico</td>
<td>
<input type = 'text' name = 'email'
value = '<?php echo$users[0]->email; ?>'/>
</td>
</tr>
<tr>
<td>Contraseña</td>
<td>
<input type = 'text' name = 'password'
value = '<?php echo$users[0]->password; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update User" class = "btn btn-success" />
<a href = "/edit-records" class = "btn btn-default">Volver</a>
</td>
</tr>
</table>
</form>
</div>

</div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html> 
