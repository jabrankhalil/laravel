<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $this->visit('/artical/create')
        ->type('Economic problem','title')
        ->type('Artical body','body')->press('add Artical')->seePageIs('/test')->see('php unit testss');
    }
}
