@extends('layouts.admin')

@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary"><i class="fa fa-image"></i> OfficeTrack</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">LoginSystem</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <div class="row page-titles eventData" id="addedit_form_div">
        <div class="col-md-12">
            @include('admin.officetrack.edit')
        </div>
    </div>  
    
    <div class="row page-titles eventData">
        <div class="col-md-12">
            <div id="formblock_projecttype">
                <div class="card-title">
                    <h4>Filters</h4>
                </div>
                <div class="card-body">
                    @include('admin.officetrack.filter')
                </div>
            </div>
        </div>
    </div>  

    <div class="card eventData" id="list">
    <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />-->

    <div id='calendar'></div>

    <br />
    </div>
    
      
    <div class="row page-titles eventImageData" id="list_image">
        
    </div>  
    <!-- Start Page Content -->

    <!-- End PAge Content -->
</div>

<script>
    
</script>
<!-- End Container fluid  -->
@endsection

@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
           
            // put your options and callbacks here
            defaultView: 'agendaWeek',
            events : [
                    @foreach($data as $appointment)
                    {
                        title : '{{ $appointment->title }}',
                        start : '{{ $appointment->start_date }}',
                        @if ($appointment->end_date)
                                end: '{{ $appointment->end_date }}',
                        @endif
                        url : '{{ route('admin.officetrack.edit', $appointment->id) }}'
                    },
                    @endforeach
            ]
        })
    });
</script>
@stop