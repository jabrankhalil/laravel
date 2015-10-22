<?php
/**
 * Created by PhpStorm.
 * User: jabran
 * Date: 10/21/2015
 * Time: 3:54 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Song extends Eloquent
{


}
$song = new Song;
$song->title="jiiij";
$song->slug="okkkf";
$song->save();