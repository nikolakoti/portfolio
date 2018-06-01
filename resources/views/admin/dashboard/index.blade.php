
@extends('admin.layout')

@section('head_title', 'Dashboard')

@section('content')

<h2 class="text-muted">Dashboard</h2>
<hr style="border: 1px solid rgb(33,98,184);">
<div class="container pt-md-3">
    <div class="row align-items-center justify-content-center"> 
        <div class="card text-center col-md-3 mt-2 mb-3 ml-3 mr-3">
            <div class="card-body">
                <h4 class="card-title text-muted text-center"><i class="fa fa-language pr-2"></i>Languages</h4>
                <p class="card-text">Add new, edit or delete language</p>
                <a href="#" class="btn btn-primary">Go to page</a>
            </div>
        </div> 
        <div class="card text-center col-md-3 mt-2 mb-3 ml-3 mr-3">
            <div class="card-body">
                <h4 class="card-title text-muted text-center"><i class="fa fa-user-circle pr-2"></i>Personal info</h4>
                <p class="card-text">Add new, edit or delete personal info</p>
                <a href="#" class="btn btn-primary">Go to page</a>
            </div>
        </div> 

        <div class="card text-center col-md-3 mt-2 mb-3 ml-3 mr-3">
            <div class="card-body">
                <h4 class="card-title text-muted text-center"><i class="fa fa-mortar-board pr-2"></i>Education</h4>
                <p class="card-text">Add new, edit or delete education</p>
                <a href="#" class="btn btn-primary">Go to page</a>
            </div>
        </div> 
        <div class="card text-center col-md-3 mt-2 mb-3 ml-3 mr-3">
            <div class="card-body">
                <h4 class="card-title text-muted text-center"><i class="fa fa-briefcase pr-2"></i>Jobs</h4>
                <p class="card-text">Add new, edit or delete job</p>
                <a href="{{route('admin.jobs')}}" class="btn btn-primary">Go to page</a>
            </div>
        </div> 
        <div class="card text-center col-md-3 mt-2 mb-3 ml-3 mr-3">
            <div class="card-body">
                <h4 class="card-title text-muted text-center"><i class="fa fa-asterisk pr-2"></i>Skills</h4>
                <p class="card-text">Add new, edit or delete skill</p>
                <a href="#" class="btn btn-primary">Go to page</a>
            </div>
        </div> 

    </div>
</div>
@endsection

