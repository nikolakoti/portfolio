<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locale;
use App\Models\Posao;
use Illuminate\Support\Facades\App;

class FormController extends Controller {

    public function index() {
        
        $locales = Locale::all();
        
        return view('admin.jobs.add', [
            'languages' => $locales
        ]);
    }

    public function insert() {
        
       

        $request = request();


        $formData = $request->validate([
            'year_from' => 'present',
            'year_to' => 'present',
            'month_from' => 'present',
            'month_to' => 'present',
            'lang' => 'present',
            'position' => 'present',
            'company' => 'present',
            'address' => 'present',
            'city' => 'present',
            'description' => 'present'
        ]);
        
        
        $job = new Posao($formData);
        
        $job->save();
        
        //dd($job);
       
//        $job = new Job([
//            'year_from' => $formData['year_from'],
//            'year_to' => $formData['year_to'],
//        ]);
//
//        

//        $jobTrans = new JobTrans([
//            'job_id' => $job->id,
//            'lang' => $formData['lang'],
//            'position' => $formData['position'],
//            'company' => $formData['company'],
//            'address' => $formData['address'],
//            'city' => $formData['city'],
//            'description' => $formData['description'],
//            'month_from' => $formData['month_from'],
//            'month_to' => $formData['month_to']
//        ]);
//
//        $jobTrans->save();

        return redirect()->route('test')
                        ->with('systemMessage', 'Novi posao je dodat u bazu!');
    }

}
