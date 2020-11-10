@extends('layouts.admin')

@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary"><i class="fa fa-image"></i>Events</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <div class="row page-titles eventData" id="addedit_form_div">
        <div class="col-md-12">
            @include('events.edit')
        </div>
    </div>  
    
    <div class="row page-titles eventData">
        <div class="col-md-12">
            <div id="formblock_projecttype">
                <div class="card-title">
                    <h4>Filters</h4>
                </div>
                <div class="card-body">
                    @include('events.filter')
                </div>
            </div>
        </div>
    </div>  

    <div class="card eventData" id="list">
        @include('events.list')
    </div>
    
    
      
    <div class="row page-titles eventImageData" id="list_image">
        
    </div>  
    <!-- Start Page Content -->

    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
@endsection