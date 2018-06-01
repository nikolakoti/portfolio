<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Locale;
use App\Models\Skill;

class HomeController extends Controller {

    public function index() {

        $langCode = app()->getLocale();

        $localeCodes = Locale::all();
        
        $languages = Language::where('lang_code', '=', $langCode)->get();
        
        $skills = Skill::all();

        return view('front.home.index', [
            'languages' => $languages,
            'localeCodes' => $localeCodes,
            'skills' => $skills
        ]);
    }

}
