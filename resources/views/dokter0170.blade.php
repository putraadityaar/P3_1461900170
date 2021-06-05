<!DOCTYPE html>
<html>
<head>
    <title>Dokter</title>
</head>
<body>
    <a href="{{url('/dokter')}}">
        <input type="button" value="DOKTER"></input>
    </a>
    <a href="{{url('/pasien')}}">
        <input type="button" value="PASIEN"></input>
    </a>
    <a href="{{url('/kamar')}}">
        <input type="button" value="KAMAR"></input>
    </a>
    <a href="{{url('/user')}}">
        <input type="button" value="USER"></input>
    </a>

    <div class="div">
    <div class="col-lg-6">
    <div class="row my-8">
    <br>
    <h1>Halaman Dokter</h1>

    </div>
    </div>
    </div>
<hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>JABATAN</th>
        </tr>
        @foreach($dokter as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->jabatan }}</td>
        </tr>
        @endforeach
    </table>

 
</body>
</html>