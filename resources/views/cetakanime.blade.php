<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN ANIME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    h1{
        font-family: sans-serif;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        color: #666;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        border: #ccc 1px solid;
    }

    table th {
        padding: 15px 35px;
        border-left:1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child{
        border-left:none;
    }

    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        padding-left: 20px;
        border-left: 0;
    }

    table td {
        padding: 15px 35px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }

    table tr:last-child td {
        border-bottom: 0;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }
</style>
<center>
    <h5>LAPORAN ANIME</h5>
</center>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Episode</th>
        <th>Genre</th>
        <th>Rating</th>
        <th>Studio</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($anime as $a)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $a->judul }}</td>
            <td>{{ $a->episode }}</td>
            <td>{{ $a->genre }}</td>
            <td>{{ $a->rating }}</td>
            <td>{{ $a->studio }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
