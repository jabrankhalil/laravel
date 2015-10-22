<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
    //
    public function __construct()
    {
        echo "hello";

    }

    /**
     * @param Student $stud
     * @return \Illuminate\View\View
     */
    public function information(Student $stud)
    {
        {
            //$stud=new Student();
            $stud->name='khan';
            $stud->father_name="baap of khan";
            $stud->roll_number="420";
            $stud->save();
            //$info = $stud::withTrashed();
            //$info->delete();
            //$stud->destroy(4);
            return view('songs.song',compact('info'));
        }

    }
    public function show(Student $val,$id)
    {
        //$val=new Student();
        $show=$val::find($id);
        return view('songs.student',compact('show'));
    }
    public function noMethod(MyModel $my)
    {
        $value=$my::get();
    }

}
