<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_group extends Model
{
    use HasFactory;

    public function create($request)
    {
        $value = new blood_group();
        $value->$request->name;
        $value->$request->status;
        $value->save();
    }
    public function donor()
    {
        return $this->hasMany('donor');
    }
}
