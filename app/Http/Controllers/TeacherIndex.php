<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\subject;


class TeacherIndex extends Controller
{
    public function TeacherIndex(){
        return view('teacher.index');
    }

    public function Addpaper(){
        return view('teacher.Addpaper');

    }
    public function getsemester()
    {
        $semester = DB::table('semester')->pluck("semester","id");
        return view('teacher.Addpaper',compact('semester'));
    }
    public function getsubject($id)
    {
        $subject = DB::table("subject")->where("semester_id",$id)->pluck("subname","id");
        return json_encode($subject);
    }
    public function getcode($id)
    {
        $posts = suject::orderby('created_at', 'desc')->get();
        return view('teacher.Addpaper',compact('posts'));

    }

}
