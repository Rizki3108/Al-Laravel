<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Transaksi</title>
</head>
<body>
    <center>
        <h1>Data Tabel Transaksi</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>ID Barang 2</th>
                <th>ID Pembeli</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->barang2->nama_barang2s}}</td>
                    <td>{{$value->pembeli->nama_pembeli}}</td>
                    <th>{{$value->pembeli->jenis_kelamin}}</th>
                    <td>{{$value->jumlah}}</td>
                    <td>{{$value->tanggal}}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>