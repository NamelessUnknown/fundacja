<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function setPdfAttribute($doc)
    {
        $this->attributes['pdf'] = json_decode($doc)[0]->download_link;
    }

}
