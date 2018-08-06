<!DOCTYPE html>
<html>
  <head>
    <title>Car</title>
  </head>
  <body>
    <h1>Car</h1>
    <ul>
      @foreach ($carList as $car) 
          <li>{{ $car->make }}</li>
          <li>{{ $car->model }}</li>
      @endforeach
    </ul>
  </body>
</html>