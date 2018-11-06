<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public static function getContacts()
    {
        return static::first();
    }
    
}
