<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model {

    protected $table = 'locales';
    protected $primaryKey = 'id';
    protected $fillable = ['locale_code'];

}
