<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
        @foreach($ortu as $key) <hr>
       Nama ibu : {{ $key->nama_ibu}}<br>
       Nama ayah : {{ $key->nama_ayah}}<br>
       umur ibu : {{ $key->umur_ibu}}<br>
       umur ayah : {{ $key->umur_ayah}}<br>

       @foreach ($key->siswa as $data)
    	<li>{{$data->nama}}</li><br>
       @endforeach
<hr>
       @endforeach 
</body>
</html>