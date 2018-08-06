<!DOCTYPE html>
<html>
  <head>
    <title>Countries</title>
  </head>
  <h2>Country list that uses EUR currency:</h2>
  <body>
        <ul>
            @foreach ($results as $result) 
            <li>{{ $result->country }}  ->  {{ $result->iso3 }} </li>
            @endforeach
        </ul>
  </body>
</html>