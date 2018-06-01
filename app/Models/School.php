<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

    protected $table = 'schools';
    protected $primaryKey = 'id';
    protected $fillable = ['lang', 'education', 'school', 'school_address', 'city', 'education_period', 'about_education'];

}
