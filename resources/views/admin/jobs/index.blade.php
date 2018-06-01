@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('admin.dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item text-muted">
        Jobs
    </li>
</ol>
<h1 class="text-muted">Jobs List</h1>
<hr style="border: 1px solid rgb(33,98,184);">			

<div class="card" id="jobsList">
    <div class="card-header">
        <i class="fa fa-table"></i> Jobs List

        <div class="btn-group btn-group-sm float-right">
            <a class="btn btn-secondary" href="{{route('admin.jobs.add')}}">
                <i class="fa fa-plus"></i>
                Add New Job
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Working Period</th>
                        <th scope="col">Lang</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Supervisor guest response</td>
                        <td>Air Serbia Ground Services d.o.o.</td>
                        <td>Airport Nikola Tesla</td>
                        <td>Belgrade</td>
                        <td>October 2014 - January 2018</td>
                        <td>en</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-secondary" href="#" title="edit"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-secondary" title="delete" data-toggle="modal" data-target="#delete-record-modal"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Supervisor guest response</td>
                        <td>Air Serbia Ground Services d.o.o.</td>
                        <td>Airport Nikola Tesla</td>
                        <td>Belgrade</td>
                        <td>October 2014 - January 2018</td>
                        <td>en</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-secondary" href="#" title="edit"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-secondary" title="delete" data-toggle="modal" data-target="#delete-record-modal"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<form class="modal fade" id="delete-record-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Product Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete product brand?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</form>
@endsection