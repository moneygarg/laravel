@extends('layouts.admin')

@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary"><i class="fa fa-user"></i> User</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <div class="row page-titles" id="uploadAvatars_form_div">
        <div class="col-md-12">
            @include('users.editprofileimage')
        </div>
    </div>  
    <div class="row page-titles" id="addedit_form_div">
        <div class="col-md-12">
            @include('users.edit')
        </div>
    </div>  
    <div class="row page-titles" id="main_div">
        <div class="col-md-12">
            <a href="{{action('UserController@edit',$users->id)}}"  aria-expanded="true" class="fa fa-edit edit_profile">
                <span class="hide-menu" >Edit Profile</span>
            </a>&nbsp;|&nbsp;
            <a href="{{action('UserController@edit',['id'=>$users->id, 'type'=>"password"])}}"  aria-expanded="true" class="fa fa-edit edit_password">
                <span class="hide-menu" >Change Password</span>
            </a>
            <hr>
        </div>
        <div id="profileView">
            @include('users.profileview')
        </div>
        
    </div>  
    <!-- Start Page Content -->

    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
@endsection