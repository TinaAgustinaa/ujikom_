<!DOCTYPE html>
<html>
<head>
    <title>Instansi</title>
</head>
<body>

<div>
    <a href="{{ route('phonebook.create') }}"> Add Instansi</a>
</div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No. Telp</th>
        <th>instansi</th>
    </tr>
    @foreach ($phonebook as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->no_telepon }}</td>
        <td>{{ $data->instansi }}</td>
        <td>
            <form action="{{ route('phonebook.destroy',$data->id) }}" method="POST">
                <a href="{{ route('phonebook.edit',$data->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>