<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KiderClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'className',
        'price',
        'age',
        'time',
        'capacity',
        'active',
        'image',
        'teacherName',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherName', 'fullName');
    }

    public function children()
    {
        return $this->belongsToMany(Child::class, 'child_classes', 'class_id', 'child_id');
    }
}