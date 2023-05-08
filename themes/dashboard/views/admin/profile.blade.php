@extends('admin.partials.masteradmin')

@section('title')
Profile Settings
@endsection

@section('content')
<div class="container-fluid d-flex justify-content-between mb-4">
    <h4 class="h3 mb-0 text-gray-800">Profile Settings</h4>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-8"><label class="labels">Full Name</label><input type="text" class="form-control"
                    placeholder="Full Name" value=""></div>
            <div class="col-md-8"><label class="labels">Phone</label><input type="text" class="form-control" value=""
                    placeholder="Phone"></div>
            <div class="col-md-8"><label class="labels">Username</label><input type="text" class="form-control" value=""
                    placeholder="Username"></div>
        </div>
    </div>
</div>

@endsection