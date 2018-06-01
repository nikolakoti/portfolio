<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class EducationController extends Controller {

    public function listEducation() {
        
        $lang = app()->getLocale();

        $education = School::where('lang', '=', $lang)->get();
       
        return response()->json($education);
    }

}
