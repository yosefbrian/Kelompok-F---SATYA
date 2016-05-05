@extends('layouts.app')

@section('content')
<form action="{{url('admin/buatkuis') }}" method="post" enctype="multipart/form-data">
    <label class="control-label" for="bahasa">Bahasa : </label>
    <select name="bahasa" class="form-control">
    	<option value="jawa">Jawa</option>
    	<option value="melayu">Melayu</option>
  	</select>
  	<label class="control-label" for="level">Level : </label>
    <select name="level" class="form-control">
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
  	</select>
  	Nama Kuis :<br>
  	<input class="form-control" type="text" name="nama"><br>
  	Nama Kuis :<br>
  	<input class="form-control" type="text" name="poin"><br>
  	Pertanyaan 1 :<br>
  	<input class="form-control" type="text" name="pertanyaan1"><br>
  	Jawaban 1 :<br>
  	<input class="form-control" type="text" name="jawaban1"><br>
  	Gambar 1 :
  	<input type="file" class="btn btn-default btn-file" name="fileToUpload1" id="fileToUpload" />
  	Pertanyaan 2 :<br>
  	<input class="form-control" type="text" name="pertanyaan2"><br>
  	Jawaban 2 :<br>
  	<input class="form-control" type="text" name="jawaban2"><br>
  	Gambar 2 :
  	<input type="file" class="btn btn-default btn-file" name="fileToUpload2" id="fileToUpload" />
  	Pertanyaan 3 :<br>
  	<input class="form-control" type="text" name="pertanyaan3"><br>
  	Jawaban 3 :<br>
  	<input class="form-control" type="text" name="jawaban3"><br>
  	Gambar 3 :
  	<input type="file" class="btn btn-default btn-file" name="fileToUpload3" id="fileToUpload" />
  	Pertanyaan 4 :<br>
  	<input class="form-control" type="text" name="pertanyaan4"><br>
  	Jawaban 4 :<br>
  	<input class="form-control" type="text" name="jawaban4"><br>
  	Gambar 4 :
  	<input type="file" class="btn btn-default btn-file" name="fileToUpload4" id="fileToUpload" />
  	Pertanyaan 5 :<br>
  	<input class="form-control" type="text" name="pertanyaan5"><br>
  	Jawaban 5 :<br>
  	<input class="form-control" type="text" name="jawaban5"><br>
  	Gambar 5 :
  	<input type="file" class="btn btn-default btn-file" name="fileToUpload5" id="fileToUpload" />
  	


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 
@endsection