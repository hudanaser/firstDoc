<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
  <ul>
    @foreach ($tasks as $id => $task)
  <li> <a href="{{'task/show/' . $id}}"> <h4> {{$task}}</h4></a></li>
  @endforeach
</ul>

</body>
</html>
