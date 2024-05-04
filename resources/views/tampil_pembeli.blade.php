<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Pembeli</title>
</head>
<body>
    <center>
        <h1>Data Tabel Pembeli</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama_pembeli}}</td>
                    <td>{{$value->jenis_kelamin}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>