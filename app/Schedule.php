<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
         protected $fillable = ["id", "name","Specialist","date","time","remark"];
    public static $rules = [
            "id"  => 'required',
            'name'   => 'required|min:2',
            'Specialist'   => 'required| min:2',
            'date'   => 'required|min:2',
            'time'   => 'required|min:2',
            'remark'   => 'required|min:2',
        ];
}
