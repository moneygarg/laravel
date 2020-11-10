@extends('layouts.admin')

@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary"><i class="fa fa-tasks"></i> Redmines</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Redmines</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <div class="row page-titles" id="addedit_form_div">
        <div class="col-md-12">
            @include('redmines.edit')
        </div>
    </div>  
    <div class="row page-titles">
        <div class="col-md-12">
            <div id="formblock_projecttype">
                <div class="card-title">
                    <h4>Filters</h4>
                </div>
                <div class="card-body">
                    @include('redmines.filter')
                </div>
            </div>
        </div>
    </div>  
    
    <!-- Start Page Content -->
    <div class="card" id="list">
        @include('redmines.list')
    </div>
    <!-- End Page Content -->
</div>
<!-- End Container fluid  -->
@endsection