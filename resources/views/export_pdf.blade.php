<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla de usuarios | PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
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

<table id="myTable">
  <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo electrónico</th>

  </tr>
@foreach ($p as $data)  
  <tr>
    <td>{{ $data->id }}</td>
    <td>{{ $data->name }}</td>
    <td>{{ $data->email }}</td>
  </tr>
@endforeach
</table>
</body>

</html>