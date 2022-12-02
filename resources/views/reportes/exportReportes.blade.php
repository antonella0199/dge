<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PDF</title>
</head>
<body>
    <h1> Reportes </h1>
    <table class='table table-striped'>
        <thead >
            <tr>
                <th> Asunto </th>
                <th> Barrio </th>
                <th> Fecha de inicio del problema </th>
                <th> Descripcion </th>
                <th> Creado por </th>
                <th> Fecha del reporte </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->asunto }}</td>
                    <td>{{ $reporte->barrio->nombre }}</td>
                    <td>{{ $reporte->fechaIni }}</td>
                    <td>{{ $reporte->descripcion }}</td>
                    <td>{{ $reporte->user->nombre}}</td>
                    <td>{{ $reporte->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>