<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Siswa</title>
</head>
<body>
    <center>
        <h1>Tabel Siswa</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->jenis_kelamin}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->agama}}</td>
                    <td>{{$value->telepon}}</td>
                    <td>{{$value->email}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
