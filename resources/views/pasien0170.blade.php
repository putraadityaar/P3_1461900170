<!DOCTYPE html>
<html>
<head>
    <title>PASIEN</title>
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
  <h1>Halaman Pasien</h1>

    <button href="">Tambah</button>
    </div>
    </div>
    </div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
        </tr>
        @foreach($pasien as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
        </tr>
        @endforeach
    </table>

 
</body>
</html>