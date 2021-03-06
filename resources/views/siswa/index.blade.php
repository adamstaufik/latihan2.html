@extends('layouts.wellcome');
@section('isi')
<div class="row">
	<center><h1>Data siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data siswa</div>
		<div class="panel-title pull-right"><a href="/siswa/create">
		Tambah data siswa</a></div>
		</div>

		<div class="panel-body">
		<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Umur</th>
	            <th>Alamat</th>
	            <th>Nama orangtua</th>
	            <th colspan="3">Action</th>

			</tr>
		</thead>
		<tbody>
		<tr>
			@foreach($siswa as $data)
			<td>{{$data->nama}}</td>
			<td>{{$data->umur}}</td>
			<td>{{$data->alamat}}</td>
			<td>{{$data->orangtua->nama_ayah}} dan {{$data->orangtua->nama_ibu}}</td>
			<td>
				<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a>
				<td>
					<a class="btn btn-primary" href="/siswa/{{$data->id}}">Show</a>
				</td>
				<td>
					<form action="{{route('siswa.destroy',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token">
					<input class="btn btn-danger" type="submit" value="Delete">
					{{csrf_field()}}
						
					</form>
				</td>
			</td>
			
			</tr>
			@endforeach
		</tbody>
		</table>
		</div>
		</div>
	</div>
</div>
@endsection