<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;


class JobsController extends Controller {

    public function listJobs() {
        
        
        $lang = app()->getLocale();
                
        $jobs = Job::where('lang', '=', $lang)->get();

        return response()->json($jobs);


    }

}
