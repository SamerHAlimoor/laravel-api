<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoreies extends Model
{
    //

    protected $table = 'categoreies';

    protected $fillable = [
        'name_ar', 'name_en','active','created_at', 'updated_at'
    ];


    public function scopeSelection($query)
    {
        return $query->select('id', 'name_' . app()->getLocale() . ' as name','active');
    }


}
