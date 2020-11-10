<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#add_upload">
                    <span class="glyphicon glyphicon-edit"></span> 
                    <strong id="title">UPDATE YOUR PROFILE PICTURE</strong>
                </a>
            </h4>

        </div>
        <div id="add_upload" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="card-body">
                    <div class="basic-form col-md-6">
                        <form method="post" action="{{ url('/uploadAvatars/user/'.$id)}}"  id="image_addedit_form" enctype="multipart/form-data">
                            <div class="form-group">
                              <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->
                              <input type="hidden" value="{{csrf_token()}}" name="_token" />
                              <label for="name">Your Picture:*</label>
                                <input type="file" name="avatar" class="form-control" required/>
<!--                                <input type="file" required class="form-control" name="file" value="{{ isset($users["name"])?$users["name"]:'' }}"/>-->
                            </div>
                            <button type="submit" class="btn btn-primary" id="image_addedit_form_submit">
                             UPLOAD </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

