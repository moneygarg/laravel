<div class="card-body">
    <!--<h4 class="card-title">Data Export</h4>-->
    <h6 class="card-subtitle pull-right">
        <a href="{{action('EventsController@edit',$id)}}" class="btn btn-primary back fa fa-arrow-left">
        </a>
    </h6>
    <div class="panel panel-default">
        <div class="panel-heading">Upload more images</div>

        <form method="POST" action="" enctype="multipart/form-data" 
              class="dropzone" id="my-awesome-dropzone">
                {{ csrf_field() }}
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
        </form>

    </div>
        <div class="allImages">
            @include('eventImages.list')
        </div>
        <div class="hide" id="image_addedit_form_div">
            @include('eventImages.edit')
        </div>
</div>
