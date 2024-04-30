<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Post</title>
</head>
<body>
    <center>
        <h1>Tabel Post</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Titles</th>
                <th>Contents</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($data as $value)                
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>