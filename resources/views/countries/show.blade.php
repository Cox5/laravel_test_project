<!DOCTYPE html>
<html>
  <head>
    <title>Countries</title>
  </head>
  <h1>Country list:</h1>
  <body>
        <ul>
            @foreach ($countries as $country) 
            <li>{{ $country->country }}  ->  {{ $country->iso3 }} </li>
            @endforeach
        </ul>
  </body>
</html>