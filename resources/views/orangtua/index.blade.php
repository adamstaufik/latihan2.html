@extends('layouts.wellcome')
@section('isi')
 <div class="row">
 <center><h1>Data Orangtua</h1></center>
 <div class="panel panel-primary">
 <div class="panel-heading">Daya orangtua</div>
 <div class="panel-heading-right"><a href="/orangtua/create">Tambah Data</a></div>
 </div>
 <div class="panel-body">
 <table class="table">
 <head>
 <tr>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>umur ibu</th>
      <th>umur ayah</th>
      <th>Alamat</th>
      <th>Nama anak</th>
      <th colspan="2">Action</th>
      </tr>
 </head>
 <body>
 @foreach($orangtua as $data) 
 <tr>
       <td>{{ $data->nama_ibu}}</td>
       <td>{{ $data->nama_ayah}}</td>
       <td>{{ $data->umur_ibu}}</td>
       <td>{{ $data->umur_ayah}}</td>
       <td>{{ $data->alamat}}</td>
        <td>
          @foreach ($data->siswa as $a)
    	<li>{{$a->nama}}</li>
    	@endforeach
    	</td>
    	<td>
    	<a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">edit</a><td>
    	<a class="btn btn-warning" href="/orangtua/{{$data->id}}">Show</a><td>
    	 <form action="{{route('orangtua.destroy',$data->id)}}" method="post">
    	 <input type="hidden" name="method" value="DELETE">
    	 <input type="hidden" name="_token">
    	 <input class="btn btn-danger" type="submit" value="DELETE">
    	 {{csrf_field()}}
   
    	 </form>
 		</td>
 </tr>
 @endforeach
      </body>
      </table>
 </div>
 </div>
 </div>

  @endsection