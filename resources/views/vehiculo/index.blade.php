<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registrar Vehiculos</title>
  </head>
  <body>
      
    <div class="container">
      <h3>Lista de Vehiculos</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Patente</th>
              <th scope="col">Código</th>
              <th scope="col">Estado</th>
              <th scope="col">Tipo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $estados)
            <tr>
                <th scope="estados">{{$estados->id}}</th>
                <td>{{$estados->patente}}</td>
                <td>{{$estados->codigo}}</td>
                <td>{{$estados->estado}}</td>
                <td>{{$estados->tipo}}</td>
                <td>
                  <form action="{{route('vehiculo.destroy', $estados->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{route('vehiculo.edit', $estados->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a type="button" href="{{route('vehiculo.create') }}" class="btn btn-primary">Crear</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
