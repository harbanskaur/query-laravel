<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('update',$data->id)}}">
        @csrf
    <center> <h1>Update Record Here</h1><center>
    <center><input type="text" placeholder="Name" name="name"  value="{{$data->name}}"/><br><br><center>
    <center><input type="email" placeholder="Email" name="email"  value="{{$data->email}}"/><br><br><center>
    <center><input type="text" placeholder="Age" name="age"  value="{{$data->age}}"/><br><br><center>
    <center><input type="text" placeholder="City" name="city"  value="{{$data->city}}"/><br><br><center>
    <center><button type="submit">Update</button><center>
    </form>
</body>
</html>