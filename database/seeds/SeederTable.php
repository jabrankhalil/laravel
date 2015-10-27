<?php

use Illuminate\Database\Seeder;
use App\SeederData;

class SeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
      SeederData::truncate();
        factory(SeederData::class,2)->create();
    }
}
