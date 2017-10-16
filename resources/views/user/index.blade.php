@extends('layouts.layout')

@section('content')
<h3>limit vacancy day {{$vacancy->vacancy_number}}</h3>
<br>
<select id="disabledSelect" class="form-control user" name="month">
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
             <tbody>
               <tr id=''>
                 @foreach($day->slice(0,7) as $days)
                 <?php $flag=0 ?>
                 @foreach($user->days as $users)
                  @if($users->day_no==$days->id)
                  <?php $flag=1 ?>
                   @break
                  @endif
                  @endforeach
                  @if($flag==1)
                   <td style="background-color:yellow;" id="day{{$days->id}}">{{$days->day_no}}
                     @else
                     <td id="day{{$days->id}}">{{$days->day_no}}
                    @endif
                     <br>
                     <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                     <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                     <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                   </td>
                 @endforeach
                </tr>
                <tr id=''>
                  @foreach($day->slice(8,14) as $days)
                    <?php $flag=0 ?>
                    @foreach($user->days as $users)
                       @if($users->day_no==$days->id)
                         <?php $flag=1 ?>
                          @break
                       @endif
                     @endforeach
                     @if($flag==1)
                      <td style="background-color:yellow;" id="day{{$days->id}}">{{$days->day_no}}
                        @else
                        <td id="day{{$days->id}}">{{$days->day_no}}
                       @endif
                      <br>
                        <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                        <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                        <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                      </td>
                  @endforeach
                 </tr>
                 <tr id=''>
                   @foreach($day->slice(15,21) as $days)
                   <?php $flag=0 ?>
                   @foreach($user->days as $users)
                    @if($users->day_no==$days->id)
                    <?php $flag=1 ?>
                     @break
                    @endif
                    @endforeach

                    @if($flag==1)
                     <td style="background-color:yellow;" id="day{{$days->id}}">{{$days->day_no}}
                       @else
                       <td id="day{{$days->id}}">{{$days->day_no}}
                      @endif
                       <br>
                       <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                       <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                       <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                     </td>
                   @endforeach
                  </tr>
                  <tr id=''>
                    @foreach($day->slice(22,28) as $days)
                    <?php $flag=0 ?>
                    @foreach($user->days as $users)
                     @if($users->day_no==$days->id)
                     <?php $flag=1 ?>
                      @break
                     @endif
                     @endforeach
                     @if($flag==1)
                      <td style="background-color:yellow;" id="day{{$days->id}}">{{$days->day_no}}
                        @else
                        <td id="day{{$days->id}}">{{$days->day_no}}
                       @endif
                        <br>
                        <a href="../user/{{$days->id}}"><button type="submit" class="btn btn-primary" id="cat">view</button></a>
                        <button type="submit" class="btn btn-primary" id="cat" onclick="add({{$days->id}})">add</button><br><br>
                        <p id="d{{$days->id}}" style="float:right">{{count($days->users)}}</p>
                      </td>
                    @endforeach
                   </tr>
                   <tr>
                   @foreach($day->slice(29,31) as $days)
                   <?php $flag=0 ?>
                   @foreach($user->days as $users)
                    @if($users->day_no==$days->id)
                    <?php $flag=1 ?>
                     @break
                    @endif
                    @endforeach
                    @if($flag==1)
                     <td style="background-color:yellow;" id="day{{$days->id}}">{{$days->day_no}}
                       @else
                       <td id="day{{$days->id}}">{{$days->day_no}}
                      @endif
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
