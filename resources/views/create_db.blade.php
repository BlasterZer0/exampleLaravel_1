<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
   @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Añadir Usuario') }}</div>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Nombre</td>
               <td><input type='text' name='name' /></td>
            </tr>
            <tr>
               <td>Correo Electrónico</td>
               <td><input type='text' name='email' /></td>
            </tr>
            <tr>
               <td>Contraseña</td>
               <td><input type='text' name='password' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Añadir Usuario" class="btn btn-success"/>
                  <a href = "/edit-records" class="btn btn-secondary">Volver</a>
               </td>
            </tr>
         </table>
      </form>
      
      </div>
            </div>
        </div>
    </div>
</div>
@endsection      
   </body>
</html>
