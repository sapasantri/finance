<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $appends = ['village_id' => 'village'];
    protected $hidden = ['created_at', 'updated_at'];

    public function getVillageAttribute()
    {
        return \Indonesia::findVillage($this->village_id, ['district.city.province']);
    }
}
