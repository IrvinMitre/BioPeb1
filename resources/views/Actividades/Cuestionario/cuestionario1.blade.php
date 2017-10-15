@extends('layouts.app')

@section('content')
<!-- Form Name -->
<legend>1 pregunta</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Que eliges</label>
  <div class="col-md-4">

  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Option one
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Option two
    </label>  
	</div>
  <div class="radio">
    <label for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      Option two
    </label>  

  </div>
  </div>
</div>
@endsection
