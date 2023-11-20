<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('insert')}}">
        @csrf
    <center> <h1>Insert Record Here</h1><center>
    <center><input type="text" placeholder="Name" name="name"/><br><br><center>
    <center><input type="email" placeholder="Email" name="email"/><br><br><center>
    <center><input type="text" placeholder="Age" name="age"/><br><br><center>
    <center><input type="text" placeholder="City" name="city"/><br><br><center>
    <center><button type="submit">Insert</button><center>
    </form>
</body>
</html>