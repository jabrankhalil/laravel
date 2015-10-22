<?php

use Illuminate\Database\Seeder;
use App\VoterList;
class VoterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$voter=new VoterList();
        $voter->name='jabran khalil';
            $voter->father_name='khalil ahmad';
                $voter->id_no='32102-5337577-5';
        $voter->save();*/
        VoterList::truncate();
        factory(VoterList::class,2)->create();
    }
}
