<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['lang', 'position', 'company', 'company_address', 'city', 'working_period', 'job_description'];

}
