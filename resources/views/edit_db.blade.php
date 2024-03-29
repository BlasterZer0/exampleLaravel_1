<!Doctype html>
<html>
<head>
<title>Tabla de usuarios</title>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
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
                 <div class="ml-auto p-2">
                 <a href = "/home" class="btn btn-secondary">Regresar</a>
                 <a href="{{ URL::to('create-pdf') }}" class="btn btn-primary">Descargar PDF</a>
                 <a href = "/insert" class="btn btn-success">Nuevo Usuario</a>
                 </div>
                </div>
                </div>

<div>
@if (session('status'))
    <div class="alert alert-success fade in alert-dismissible show">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
      </button>
        {{ session('status') }}
    </div>
@endif
</div>
<div>

<table id="myTable">
  <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th>ID</th>
    <th onclick="sortTable(0)">Nombre</th>
    <th onclick="sortTable(1)">Correo electrónico</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
@foreach ($users as $user)  
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td><a href = 'edit/{{ $user->id }}' class="btn btn-warning">Editar</a></td>
    <td><a class="btn btn-danger" onclick="return confirm('¿Estás Seguro?')" href='delete/{{ $user->id }}'><i class="fa fa-trash"></i>Borrar</a></td>
  </tr>
@endforeach
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</div>
                
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html> 
