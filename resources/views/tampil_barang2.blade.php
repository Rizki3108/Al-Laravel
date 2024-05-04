<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Barang 2</title>
</head>
<body>
    <center>
        <h1>Data Tabel Barang 2</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Barang 2</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama_barang2s}}</td>
                    <td>{{$value->harga}}</td>
                    <td>{{$value->stok}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>