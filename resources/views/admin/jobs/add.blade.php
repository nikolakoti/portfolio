@extends('admin.layout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Jobs</a>
    </li>
    <li class="breadcrumb-item active">
        Add
    </li>
</ol>
<h1>Add new Job</h1>
<hr style="border: 1px solid rgb(33,98,184);">			

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Add Job
    </div>
    <div class="card-body">


        <form>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputState">Language</label>
                    <select id="inputState" class="form-control text-center">
                        <option selected>Choose language version</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Position</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Company</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputZip">Address</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Month from</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Month to</label>
                    <input type="text" class="form-control" id="inputCity">
                </div> 
                <div class="form-group col-md-3">
                    <label for="inputCity">Year from</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Year to</label>
                    <input type="text" class="form-control" id="inputCity">
                </div> 
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Job description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group text-right col-lg-12">
                    <hr>
                    <a class="btn btn-secondary" href="#">Cancel</a>
                    <button name="submit" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection