<?php

use Illuminate\Database\Seeder;
use App\Subject;

/**
 * Class SubjectTableSeeder
 */
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sub=new Subject();
        $sub->name="web development";
        $sub->teacher="abc";
        $sub->code="wb-2010";
        $sub->save();
    }
}
