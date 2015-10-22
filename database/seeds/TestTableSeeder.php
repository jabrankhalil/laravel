<?php

use Illuminate\Database\Seeder;

use App\test;
class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('tests')->delete();

        $user            = test::whereEmail('admin@studioa2.co.uk')->first();

        if($user !== NULL) {
            return;
        }*/

        $test            = new test;
        $test->test_name     = "php unit testing";
        $test->test_result  = "result ok";

        $test->save();
    }
}
