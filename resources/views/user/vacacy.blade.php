@foreach($day as $days)
@foreach($days->users as $user)
<p>username:{{$user->name}}           {{$days->day_no}} /{{$days->months->month_name}}/2017</p>
@endforeach
@endforeach
