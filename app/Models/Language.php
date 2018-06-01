<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {

    protected $table = 'languages';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['lang_code', 'lang_name'];

}
