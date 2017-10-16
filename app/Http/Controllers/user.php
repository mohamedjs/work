<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\UserDay;
use App\Month;
use App\User;
use App\Day;
use App\Feautre;
class user extends Controller
{
  public function show()
  {
    $month=Month::all();
    $user=Auth::user();
    $vacancy=Feautre::find(1);
    $day=Day::where('month_id','=',1)->get();
    return view('user.index',compact('month','vacancy','user','day'));
  }
  public function vacancy(Request $request)
  {
    $vacancy=Feautre::find(1);
    $user=Auth::user();
    $daysn=count($user->days);
    if($daysn < $vacancy->vacancy_number){
    $day=new UserDay();
    $day->user_id=Auth::id();
    $day->day_id=$request->id;
    $day->month_id=$request->month;
    $day->save();
    $data= json_encode($day);
    return response()->json($data);
}
    else{
        return response()->json("no");
    }
  }
  public function allvacancy($id)
  {
    $day=Day::where('id','=',$id)->get();
    return view('user.vacacy',compact('day'));
  }
  public function usernumber(Request $request)
  {
    $day=Day::where('id','=',$request->id)->get();
    foreach ($day as $days) {
      $user=$days->users;
    }
    $data= json_encode($user);
    return response()->json($data);
  }
}
