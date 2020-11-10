<div class="basic-form col-md-12">
    <form method="post" action="{{url('/find/credentials/'.$type)}}" id="filter_form">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class='row expand_row'>
                <div class='col-md-3'>
                    <!--<input type="hidden" class="form-control" name="type" placeholder="type"  value="{{ strtoupper($type) }}"/>-->
                    <input type="text" class="form-control" name="title" placeholder="title" id="filter_title"/>
                </div>
                <div class='col-md-3'>
                     <select class="form-control chosen-select" name="id_project_type" id="filter_id_project_type" data-placeholder="Select Project">
                        <option value=""></option>
                        @foreach ($projecttypes->all() as $k => $projecttype)
                            <option value="{{ $projecttype->id }}">{{ strtoupper($projecttype->title) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-md-2'>
                    <select name="id_environment_type" class="form-control chosen-select" id="filter_id_environment_type" data-placeholder="Select Env">
                        <option value=""></option>
                        <option value="DEV">Dev</option>
                        <option value="STAGING">Staging</option>
                        <option value="PROD">Prod</option>
                        <option value="LOCAL">Local</option>
                    </select>
                </div>
                <div class='col-md-4'>
                    <button class="btn btn-primary" id="filter_form_submit">Submit</button>&nbsp;
                    <button class="btn btn-default" id="filter_form_reset">Reset</button>
                </div>
            </div>
        </div>
        
    </form>
</div>