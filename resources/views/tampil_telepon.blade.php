<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Telepon</title>
</head>
<body>
    <center>
        <h1>Data Tabel Telepon</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>No Telepon</th>
                <th>Nama Pengguna</th>
                <th>Pengguna ID</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nomor_telepon}}</td>
                    <td>{{$value->pengguna->nama}}</td>
                    <td>{{$value->pengguna_id}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>