<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'fullName',
        'phone',
        'facebook',
        'twitter',
        'instagram',
        'image',
    ];

    public function kiderClasses()
    {
        return $this->hasMany(KiderClass::class);
    }
        
}
