<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Data Tabel Produk</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Tanggal Produksi</th>
                <th>ID Merek</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama_produk}}</td>
                    <td>{{$value->jumlah}}</td>
                    <td>{{$value->tanggal_produksi}}</td>
                    <td>{{$value->merek->nama_merek}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>