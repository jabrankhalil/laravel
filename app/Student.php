<?php
/**
 * Created by PhpStorm.
 * User: jabran
 * Date: 10/21/2015
 * Time: 5:55 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Eloquent {

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
/*$student=new Student;
$student->name="jabran";
$student->father_name="khalil";
$student->roll_number="8995";
$student->save();*/