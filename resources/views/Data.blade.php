<table border="1">
    <th>ID</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
    <th>MARKS1</th>
    <th>MARKS2</th>
    <th>VIEW</th>
    <th>DELETE</th>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->last_name}}</td>
            <td>{{$item->marks1}}</td>
            <td>{{$item->marks2}}</td>
            <td><a href="{{route('view',$item->id)}}">view</a></td>
            <td><a href="{{route('delete',$item->id)}}">delete</a></td>
        </tr>
    @endforeach
</table>