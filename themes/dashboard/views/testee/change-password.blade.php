@extends('testee.partials.master')

@section('title')
Change Password
@endsection

@section('content')
<div class="container-fluid d-flex justify-content-between mb-4">
    <h4 class="h3 mb-0 text-gray-800">Change Password</h4>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-8"><label class="labels">Old Password</label><input type="password" class="form-control"
                    placeholder="Old Password" value=""></div>
            <div class="col-md-8"><label class="labels">New Password</label><input type="password" class="form-control" value=""
                    placeholder="New Password"></div>
            <div class="col-md-8"><label class="labels">Confirm Password</label><input type="password" class="form-control" value=""
                    placeholder="Confirm Password"></div>
        </div>
    </div>
</div>

@endsection