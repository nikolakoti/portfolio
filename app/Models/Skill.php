<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills'; 
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['skill_name', 'img_name'];
}
