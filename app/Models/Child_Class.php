<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_Class extends Model
{
    use HasFactory;

    protected $table = 'children_classes';
    protected $fillable = ['child_id', 'class_id'];
}
