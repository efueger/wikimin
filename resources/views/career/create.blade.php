@extends('template.app')
@section('content')
<form action="{{action('CareerController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Institusi : </label><input class="form-control" type="text" name="institution[]" placeholder="education">
        </div>
        <label>Tahun : </label>
        <div class="form-group">
           <span class="col-md-3"><input type="numeric" name="year_start[]" placeholder="dari (YYYY)" class="form-control"></span> <span class="col-md-1">-</span> <span class="col-md-3"><input type="numeric" name="year_end[]" placeholder="sampai (YYYY)" class="form-control"></span>
        </div>
        <div class="form-group">
          <label>Jurusan/Gelar <input type="text" name="position[]" class="form-control"> (kosongkan jika tidak dapat diaplikasikan)
        </div>
        <div class="form-group">
          <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="inputs">
  </div>
  <button type="button" class="btn btn-default" id="more">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
<div hidden class="template">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Institusi : </label><input class="form-control" type="text" name="institution[]" placeholder="education">
        </div>
        <label>Tahun : </label>
        <div class="form-group">
           <span class="col-md-3"><input type="numeric" name="year_start[]" placeholder="dari (YYYY)" class="form-control"></span> <span class="col-md-1">-</span> <span class="col-md-3"><input type="numeric" name="year_end[]" placeholder="sampai (YYYY)" class="form-control"></span>
        </div>
        <div class="form-group">
          <label>Jurusan/Gelar <input type="text" name="position[]" class="form-control"> (kosongkan jika tidak dapat diaplikasikan)
        </div>
        <div class="form-group">
          <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="inputs">
  </div>
</div>
@endsection
@section('js')
<script>
  $('#more').click(function() {
    input = $('.form-horizontal').find('div.inputs');
    input.html($(".inputs").html()+$(".template").html());
    input.attr('class','ex')
  });
</script>
@endsection
