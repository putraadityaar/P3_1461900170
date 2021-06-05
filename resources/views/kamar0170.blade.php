<!DOCTYPE html>
<html>
<head>
    <title>KAMAR</title>
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
    <h1>Halaman KAMAR</h1>

    <button href="">Tambah</button>
    </div>
    </div>
    </div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>JABATAN</th>
        </tr>
        @foreach($kamar as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->jabatan }}</td>
        </tr>
        @endforeach
    </table>

 
</body>
</html>