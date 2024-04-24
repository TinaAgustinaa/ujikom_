<!DOCTYPE html>
<html>
<head>
    <title>Add Instansi</title>
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

<form action="{{ route('phonebook.store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="no_telepon">No. Telp:</label>
    <input type="text" name="no_telepon" id="no_telepon" required>
    <br>
    <label for="instansi">instansi:</label>
    <input type="text" name="instansi" id="instansi" required>
    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>