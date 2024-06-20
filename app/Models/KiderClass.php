<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

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
        'teacher_id',
    ];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
      }

      public function children()
      {
          return $this->belongsToMany(Child::class, 'children_classes', 'class_id', 'child_id');
      }



}



