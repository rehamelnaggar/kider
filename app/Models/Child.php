<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'childName',
        'birthDate',
    ];


    public function classes()
    {
        return $this->belongsToMany(KiderClass::class, 'children_classes', 'child_id', 'class_id');
    }
}
