<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <center><h1>INFORMATION</h1></center>
    <center><table border="1">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>AGE</th>
        <th>CITY</th>
        <th>EDIT</th>
        <th>DELETE</th>

        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->city}}</td>
                <td><a href="{{route('edit',$item->id)}}">edit</a></td> 
                <td><a href="{{route('data',$item->id)}}">delete</a></td>
            </tr>
        @endforeach
    </table><center>
</body>
</html>
