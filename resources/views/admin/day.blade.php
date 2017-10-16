@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-lg-10">
    <form class="addd" method="post" action="/admin">
      {!! csrf_field() !!}
      <div class="form-group">
          <label for="disabledSelect">Month</label>
          <select id="disabledSelect" class="form-control" name="month">
            @foreach($month as $mon)
              <option value="{{$mon->id}}" id="">{{$mon->month_name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label>day_no</label>
        <input name="day" class="form-control" placeholder="Enter Sub Day No" id="subcategory">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;" id="addday">Add</button>
    </form>
  </div>
</div>
@endsection
