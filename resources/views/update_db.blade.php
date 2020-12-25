<!DOCTYPE html>
<html>
<head>
<title>Tabla de usuarios | Editar</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>

                <div class="card-body">
                    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value = '<?php echo$users[0]->name; ?>' required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value='<?php echo$users[0]->email; ?>' required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value = '<?php echo$users[0]->password; ?>' required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex">
                           <div class="mr-auto p-2">
                                <input type = 'submit' value = "Update User" class = "btn btn-success" />
                           </div>
                           <div class="ml-auto p-2">
                                <a href = "/edit-records" class="btn btn-secondary">Volver</a>
                           </div>
                        </div>
                     </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html> 
