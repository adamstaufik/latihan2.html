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
    <from action = "{{route('orangtua.store')}}" method="post">
      {{csrf_field()}}
    <div class="form-group">
      <label class="control-lable">Nama Ayah></label>
      <input type="text" name ="a" value="{{$$data->nama_ayah}}" class="form-control" readonly="">
    </div>
      
     <div class="form-group">
      <label class="control-lable">Nama Ibu></label>
      <input type="text" name ="b" value="{{$$data->nama_ibu}}" class="form-control" readonly="">
     </div>
     <div class="form-group">
      <label class="control-lable">Umur ayah></label>
      <input type="text" name ="c" value="{{$$data->umur_ayah}}" class="form-control" readonly="">
     </div>
     <div class="form-group">
      <label class="control-lable">Umur ibu></label>
      <input type="text" name ="d" value="{{$$data->umur_ibu}}" class="form-control" readonly="">
     </div>
 <div class="form-group">
      <label class="control-lable">Alamat></label>
      <TEXTAREA class="form-control" value="{{$$data->nama_alamat}}" rows="10" name="e" readonly></TEXTAREA>
 </div>
 <div class="form-group">
      <BUTTON type=submit class="brn brn-succes">Save</BUTTON> 
      <BUTTON type=reset class="brn brn-danger">Reset</BUTTON> 
     </div> 
    </form>
    </div>
    </div>
    </div>
  @endsection