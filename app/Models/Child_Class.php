<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_Class extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'class_id',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }

    public function class()
    {
        return $this->belongsTo(KiderClass::class, 'class_id');
    }
}