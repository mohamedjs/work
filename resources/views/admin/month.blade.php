@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-lg-10">
    <form class="addca" method="post" action="/admin">
      {!! csrf_field() !!}
      <div class="form-group">
        <label>Month_name</label>
        <input name="month" class="form-control" placeholder="Enter Month Name" id="cateory">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;" id="addca">Add</button>
    </form>
  </div>
</div>
@endsection
