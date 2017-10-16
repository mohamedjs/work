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
class admin extends Controller
{
    public function show()
    {
      $month=Month::all();
      $day=Day::where('month_id','=',1)->get();
      return view('admin.index',compact('month','day'));
    }
    public function addlimitva(Request $request)
    {
        $feau=new Feautre();
        $feau->user_id=Auth::id();
        $feau->vacancy_number=$request->vacancy;
        $feau->save();
        $data= json_encode($feau);
        return response()->json($data);
    }
    public function day(Request $request)
    {
      $day=new Day();
      $day->day_no=$request->day;
      $day->month_id=$request->month;
      $day->save();
      $data= json_encode($day);
      return response()->json($data);
    }
    public function showmoday(Request $request)
    {
      $day=Day::with('users')->where('month_id','=',$request->month)->get();
      $data= json_encode($day);
      return response()->json($data);
    }
}
