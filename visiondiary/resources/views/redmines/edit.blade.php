<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#add">
                    <span class="glyphicon glyphicon-plus"></span> 
                    <strong id="title">{{ (!isset($id))?"ADD":"UPDATE" }}</strong>
                </a>
            </h4>

        </div>
        
        <div id="add" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="card-body">
                    <form method="post" action="{{ (!isset($id))?url('/edit/redmines'):url('/edit/redmines/'.$id)}}"  
                              id="addedit_form">
                    <div class="basic-form col-md-6">
                            <div class="form-group">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <label for="title">Link</label>
                                <input type="text" class="form-control" name="link" value="{{ isset($item["link"])?$item["link"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Redmine no:<span class="asterisk">*</span></label>
                                <input type="text" class="form-control" required="required" name="redmine_no" value="{{ isset($item["redmine_no"])?$item["redmine_no"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Title:<span class="asterisk">*</span></label>
                                <input type="text" class="form-control" required="required" name="title" value="{{ isset($item["title"])?$item["title"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">PROJECT TYPE:<span class="asterisk">*</span></label>
                                <select class="form-control" name="project_type" required="required">
                                    <option value="" >--SELECT--</option>
                                    <option value="visionevents" {{ ((isset($item["project_type"]) && $item["project_type"] == "visionevents")?'selected':'') }} >{{ ucfirst("visionevents")}}</option>
                                    <option value="visionlinks2" {{ ((isset($item["project_type"]) && $item["project_type"] == "visionlinks2")?'selected':'') }} >{{ ucfirst("visionlinks2")}}</option>
                                    <option value="visionintel" {{ ((isset($item["project_type"]) && $item["project_type"] == "visionintel")?'selected':'') }} >{{ ucfirst("visionintel")}}</option>
                                    <option value="vtap" {{ ((isset($item["project_type"]) && $item["project_type"] == "vtap")?'selected':'') }} >{{ ucfirst("vtap")}}</option>
                                    <option value="server" {{ ((isset($item["project_type"]) && $item["project_type"] == "server")?'selected':'') }} >{{ ucfirst("server")}}</option>
                                    <option value="other" {{ ((isset($item["project_type"]) && $item["project_type"] == "server")?'other':'') }} >{{ ucfirst("other")}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Status:</label>
                                <select class="form-control" name="status" required="required">
                                    <option value="" >Select Status</option>
                                    <option selected="selected" value="assigned">Assigned</option>
                                    <option value="pending" {{ ((isset($item["status"]) && $item["status"] == "pending")?'selected':'') }} >{{ ucfirst("pending")}}</option>
                                    <option value="feedback" {{ ((isset($item["status"]) && $item["status"] == "feedback")?'selected':'') }} >{{ ucfirst("feedback")}}</option>
                                    <option value="approved_for_production" {{ ((isset($item["status"]) && $item["status"] == "approved_for_production")?'selected':'') }} >{{ ucfirst("Approved for Production")}}</option>
                                    <option value="assigned_for_code_review" {{ ((isset($item["status"]) && $item["status"] == "assigned_for_code_review")?'selected':'') }} >{{ ucfirst("Assigned for code review")}}</option>
                                    <option value="push_to_staging" {{ ((isset($item["status"]) && $item["status"] == "push_to_staging")?'selected':'') }} >{{ ucfirst("Push to staging")}}</option>
                                    <option value="test_staging" {{ ((isset($item["status"]) && $item["status"] == "test_staging")?'selected':'') }} >{{ ucfirst("Test Staging")}}</option>
                                    <option value="push_to_preprod" {{ ((isset($item["status"]) && $item["status"] == "push_to_preprod")?'selected':'') }} >{{ ucfirst("Push to Preprod")}}</option>
                                    <option value="push_to_production" {{ ((isset($item["status"]) && $item["status"] == "push_to_production")?'selected':'') }} >{{ ucfirst("Push to production")}}</option>
                                    <option value="rejected" {{ ((isset($item["status"]) && $item["status"] == "rejected")?'selected':'') }} >{{ ucfirst("Rejected")}}</option>
                                    <option value="resolved" {{ ((isset($item["status"]) && $item["status"] == "resolved")?'selected':'') }} >{{ ucfirst("Resolved")}}</option>
                                    <option value="on_hold" {{ ((isset($item["status"]) && $item["status"] == "on_hold")?'selected':'') }} >{{ ucfirst("on hold")}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Priority:</label>
                                <select class="form-control" name="priority" required="required">
                                    <option value="" >Select Type</option>
                                    <option selected="selected" value="normal" {{ ((isset($item["priority"]) && $item["priority"] == "normal")?'selected':'') }} >{{ ucfirst("Normal")}}</option>
                                    <option value="high" {{ ((isset($item["priority"]) && $item["priority"] == "high")?'selected':'') }} >{{ ucfirst("High")}}</option>
                                    <option value="urgent" {{ ((isset($item["priority"]) && $item["priority"] == "urgent")?'selected':'') }} >{{ ucfirst("Urgent")}}</option>
                                    <option value="immediate" {{ ((isset($item["priority"]) && $item["priority"] == "immediate")?'selected':'') }} >{{ ucfirst("Immediate")}}</option>
                                </select>
                            </div>
                            
                            
                            
                            
                    </div>
                        <div class="basic-form col-md-6">
                            <div class="form-group">
                                <label for="tag">Time Spent:</label>
                                <input type="text" class="form-control" name="timespent" value="{{ isset($item["timespent"])?$item["timespent"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Assigned by:</label>
                                <input type="text" class="form-control" name="assigned_by" value="{{ isset($item["assigned_by"])?$item["assigned_by"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Assigned to:</label>
                                <input type="text" class="form-control" name="assigned_to" value="{{ isset($item["assigned_to"])?$item["assigned_to"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Start date:</label>
                                <input type="text" class="form-control" name="start_date" value="{{ isset($item["start_date"])?$item["start_date"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Due date:</label>
                                <input type="text" class="form-control" name="due_date" value="{{ isset($item["due_date"])?$item["due_date"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Active:</label>
                                <select class="form-control" name="active" required="active">
                                    <option value="" >Select</option>
                                    <option selected="selected" value="1" {{ ((isset($item["active"]) && $item["active"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($item["active"]) && $item["active"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                                </select>
                            </div>
                        </div>
                    <div class="basic-form col-md-12">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($item["description"])?$item["description"]:'' }}</textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary" id="addedit_form_submit">{{ (!isset($id))? "CREATE" :"UPDATE"}}</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

