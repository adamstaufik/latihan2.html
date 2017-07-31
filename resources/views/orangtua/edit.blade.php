@extends('layouts.wellcome')
@section('isi')
 <div class="row">
 <center><h1>Create Data Orangtua</h1></center>
 <div class="panel panel-primary">
 <div class="panel-heading">Data orangtua</div>
 <div class="panel-title-pull-right">
 <a href="{{ URL::previous()}}">Back</a></div>
 </div>


 <div class="panel-body">
    <from action = "{{route('orangtua.update',$data->id)}}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{csrf_token}}">
    <div class="form-group">
      <label class="control-lable">Nama Ayah></label>
      <input type="text" name ="a" class="form-control" value="{{$$data->nama_ayah}}" required=""  >
    </div>
      
     <div class="form-group">
      <label class="control-lable">Nama Ibu></label>
      <input type="text" name ="b" class="form-control" value="{{$data->nama_ibu}}" required=""  >
     </div>
     <div class="form-group">
      <label class="control-lable">Umur Ayah></label>
      <input type="text" name ="c" class="form-control" value="{{$data->umur_ayah}}" required="" >
     </div>
     <div class="form-group">
      <label class="control-lable">Umur ibu></label>
      <input type="text" name ="d" class="form-control" value="{{$data->umur_ibu }}" required="" >
     </div>
 <div class="form-group">
      <label class="control-lable">Alamat></label>
      <TEXTAREA class="form-control" rows="10" name="e" required></TEXTAREA>>
 </div>
 <div class="form-group">
      <button type=submit class="btn btn-succes">Save</button> 
      <button type=reset class="btn btn-danger">Reset</button> 
     </div> 
    </form>
    </div>
    </div>
    </div>
  @endsection