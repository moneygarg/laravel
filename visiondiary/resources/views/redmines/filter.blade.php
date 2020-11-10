<div class="basic-form col-md-12">
    <form method="post" action="{{url('/find/redmines')}}" id="filter_form">
        <div class="form-group">
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Title:</label></div>
                <div class='col-md-4'>
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <input type="text" class="form-control" name="title" placeholder="title" id="filter_title"/>
                </div>
            </div>
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Users:</label></div>
                <div class='col-md-4'>
                     <select class="form-control chosen-select" name="id_user" id="filter_id_user" data-placeholder="Select Project">
                        <option value=""></option>
                        @foreach ($users->all() as $k => $user)
                            @if(in_array($user->type,array("developer")))
                                @continue
                            @endif
                            <option value="{{ $user->id }}">{{ ucfirst($user->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Status:</label></div>
                <div class='col-md-4'>
                    <select class="form-control" name="status" id="filter_status">
                        <option value="" >Select Status</option>
                        <option value="assigned">{{ ucfirst("assigned")}}</option>
                        <option value="pending">{{ ucfirst("pending")}}</option>
                        <option value="feedback">{{ ucfirst("feedback")}}</option>
                        <option value="approved_for_production">{{ ucfirst("Approved for Production")}}</option>
                        <option value="assigned_for_code_review">{{ ucfirst("Assigned for code review")}}</option>
                        <option value="push_to_staging" >{{ ucfirst("Push to staging")}}</option>
                        <option value="test_staging">{{ ucfirst("Test Staging")}}</option>
                        <option value="push_to_preprod">{{ ucfirst("Push to Preprod")}}</option>
                        <option value="push_to_production">{{ ucfirst("Push to production")}}</option>
                        <option value="rejected" >{{ ucfirst("Rejected")}}</option>
                        <option value="resolved">{{ ucfirst("Resolved")}}</option>
                        <option value="on_hold">{{ ucfirst("On hold")}}</option>
                    </select>
                </div>
            </div>
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Project Type:</label></div>
                <div class='col-md-4'>
                     <select class="form-control" name="project_type" id="filter_project_type">
                        <option value="" >Select project type</option>
                        <option value="visionevents">{{ ucfirst("visionevents")}}</option>
                        <option value="visionlinks2">{{ ucfirst("visionlinks2")}}</option>
                        <option value="visionintel">{{ ucfirst("visionintel")}}</option>
                        <option value="vtap">{{ ucfirst("vtap")}}</option>
                        <option value="server">{{ ucfirst("server")}}</option>
                        <option value="other">{{ ucfirst("other")}}</option>
                    </select>
                </div>
            </div>
            <div class='row expand_row'>
                <div class='col-md-4'>
                    <button class="btn btn-primary" id="filter_form_submit">Submit</button>&nbsp;
                    <button class="btn btn-default" id="filter_form_reset">Reset</button>
                </div>
            </div>
            </div>
    </form>
</div>