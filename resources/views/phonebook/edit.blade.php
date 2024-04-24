<!DOCTYPE html>
<html>
<head>
    <title>Edit Instansi</title>
</head>
<body>

<div>
    <a href="{{ route('phonebook.index') }}"> Back</a>
</div>

@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('phonebook.update',$phonebook->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $phonebook->nama }}" required>
    <br>
    <label for="no_telepon">No. Telp:</label>
    <input type="text" name="no_telepon" id="no_telepon" value="{{ $phonebook->no_telepon }}" required>
    <br>
    <label for="instansi">Instansi:</label>
    <input type="text" name="instansi" id="instansi" value="{{ $phonebook->phonebook }}" required> <!-- Tambahkan ini -->
    <br>
    <button type="submit">Update</button>
</form>

</body>
</html>