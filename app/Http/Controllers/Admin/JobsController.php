<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
   public function index() {
       
       return view('admin.jobs.index');
   }
   
   public function add() {
       
       return view('admin.jobs.add');
   }
}
