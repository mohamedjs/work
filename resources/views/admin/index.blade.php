@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-lg-8 col-md-offset-2">
    <form class="addva" method="post" action="/admin">
      {!! csrf_field() !!}
      <div class="form-group">
        <label>Limit Vacancy Number</label>
        <input name="vacancy" type="number" class="form-control" placeholder="Enter  Vacancy Number" id="cateory">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;" id="addva">Add</button>
    </form>
  </div>
</div>
<br>
<select id="disabledSelect"  class="form-control admin" name="month">
  @foreach($month as $mon)
    <option value="{{$mon->id}}" id="">{{$mon->month_name}}</option>
  @endforeach
</select>
<br>
<div class="row">
  <div class="col-md-12">
    <!--    Hover Rows  -->
   <div class="panel panel-default">
     <div class="panel-heading">
         Day_table
     </div>
     <div class="panel-body">
       <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover" id="even-table">
             <thead>
               <tr>
                 <th>sat</th>
                 <th>sun</th>
                 <th>mon</th>
                 <th>tue</th>
                 <th>wen</th>
                 <th>thu</th>
                 <th>fri</th>
               </tr>
             </thead>
             <tbody id="admin">
               <tr id=''>
                 @foreach($day->slice(0,7) as $days)
                   <td id="day{{$days->id}}">{{$days->day_no}}
                   <br>
                   <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                   <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                   <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                 </td>
                 @endforeach
                </tr>
                <tr id=''>
                  @foreach($day->slice(8,14) as $days)
                    <td id="day{{$days->id}}">{{$days->day_no}}
                    <br>
                    <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                    <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                    <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                  </td>
                  @endforeach
                 </tr>
                 <tr id=''>
                   @foreach($day->slice(15,21) as $days)
                     <td id="day{{$days->id}}">{{$days->day_no}}
                     <br>
                     <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                     <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                     <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                   </td>
                   @endforeach
                  </tr>
                  <tr id=''>
                    @foreach($day->slice(21,28) as $days)
                      <td id="day{{$days->id}}">{{$days->day_no}}
                      <br>
                      <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                      <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                      <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                    </td>
                    @endforeach
                   </tr>
                   @foreach($day->slice(28,31) as $days)
                     <td id="day{{$days->id}}">{{$days->day_no}}
                     <br>
                     <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                     <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                     <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                   </td>
                   @endforeach
                  </tr>
             </tbody>
           </table>
       </div>
     </div>
   </div>
@endsection
