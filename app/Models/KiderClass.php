<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class KiderClass extends Model
{
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

    // Define the relationship with Teacher model
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherName', 'fullName');
    }

    // Method to fetch teacher names for adding a Kider class
    public static function getTeacherNames()
    {
        return Teacher::pluck('fullName', 'fullName');
    }
}