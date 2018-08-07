<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // insert here table name if it differ from 'countries'
    // protected $table = 'custom_name';

    public function isComplete() 
    {
        return false;
    }
}
