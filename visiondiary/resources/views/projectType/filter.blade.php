<div class="basic-form col-md-12">
    <form method="post" action="{{url('/find/projectType')}}" id="filter_form">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class='row expand_row'>
                <div class='col-md-4'>
                    <input type="text" class="form-control" name="title" placeholder="title" id="filter_title"/>
                </div>
                <div class='col-md-4'>
                    <select class="form-control" name="type" id="filter_type">
                        <option value="" >Select Type</option>
                        <option value="vision" >Vision</option>
                        <option value="other" >Other</option>
                        <option value="personnel" >Personnel</option>
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