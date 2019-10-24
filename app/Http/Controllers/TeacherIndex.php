<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\exam;


class TeacherIndex extends Controller
{
    public function TeacherIndex(){
        return view('teacher.index');
    }

    public function getsemester()
    {
        $semester = DB::table('semester')->pluck("semester","id");
        $posts = exam::orderby('created_at', 'desc')->take(4)->get();
        return view('teacher.Addpaper',compact('semester'))->with('posts', $posts);
    }

    public function getsubject($id)
    {
        $subject = DB::table("subject")->where("semester_id",$id)->pluck("subname",'code');
        return json_encode($subject);
    }


}
