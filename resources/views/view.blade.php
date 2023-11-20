<table border="1">
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>AGE</th>
    <th>CITY</th>

    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->city}}</td>
            {{-- <td><a href="{{route('view',$item->id)}}">view</a></td> --}}
            {{-- <td><a href="{{route('delete',$item->id)}}">delete</a></td> --}}
        </tr>
    @endforeach
</table>