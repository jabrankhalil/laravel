<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticalModel extends Model
{
    //
    protected $table='artical';

    /**
     * @param $value
     * @return mixed
     * accessor used to apply formate when we are getting it through eloquent
     * function get(Name of colum)Attribute($value)
     */
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    /**
     * @param $value
     * @return string
     * mutator used to apply formate when we are saving some value in database through eloquent
     * function set(name of coloum)Attribute($value)
     * f
     */
    public function setBodyAttribute($value)
    {
        $this->attributes['body']=ucfirst($value);

    }
}
