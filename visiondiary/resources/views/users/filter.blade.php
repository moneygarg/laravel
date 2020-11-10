<div class="basic-form col-md-12">
    <form method="post" action="{{url('/find/user')}}" id="filter_form">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class='row expand_row'>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="value" placeholder="value" id="filter_title"/>
                </div>
                <div class='col-md-4'>
                     <select class="form-control chosen-select" name="type" id="filter_type" data-placeholder="Specify a user...">
                        <option value="" ></option>
                        <option value="admin" >Admin</option>
                        <option value="developer" >Developer</option>
                        <option value="user" >User</option>
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