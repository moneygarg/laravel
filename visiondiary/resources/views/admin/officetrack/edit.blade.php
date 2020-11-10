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
                    <form method="post" action="{{ (!isset($id))?url('/edit/events'):url('/edit/events/'.$id)}}"  
                              id="addedit_form">
                    <div class="basic-form col-md-6">
                        <div class="form-group">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <label for="events name">TITLE</label>
                            <input type="text" class="form-control" required="required" name="title" value="{{ isset($item["title"])?$item["title"]:'' }}"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="feature">Day:</label>
                            <select class="form-control" name="day" required="required">
                                <!--<option value="" >Select Type</option>-->
                                <option value="working" {{ ((isset($item["day"]) && $item["day"] == working)?'selected':'') }} >{{ ucfirst("Working")}}</option>
                                <option value="holiday" {{ ((isset($item["day"]) && $item["day"] == holiday)?'selected':'') }} >{{ ucfirst("Holiday")}}</option>
                                <option value="leave" {{ ((isset($item["day"]) && $item["day"] == leave)?'selected':'') }} >{{ ucfirst("Leave")}}</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="public">Leave Type:</label>
                            <select class="form-control" name="public" required="required">
                                <option value="" >Select Type</option>
                                <option value="casual" {{ ((isset($item["leave_type"]) && $item["leave_type"] == "casual")?'selected':'') }} >{{ ucfirst("Casual")}}</option>
                                <option value="medical" {{ ((isset($item["leave_type"]) && $item["leave_type"] == "medical")?'selected':'') }} >{{ ucfirst("Medical")}}</option>
                                <option value="paidleave" {{ ((isset($item["leave_type"]) && $item["leave_type"] == "paidleave")?'selected':'') }} >{{ ucfirst("Paid leave")}}</option>
                                <option value="halfdayleave" {{ ((isset($item["leave_type"]) && $item["leave_type"] == "halfdayleave")?'selected':'') }} >{{ ucfirst("Half day leave")}}</option>
                            </select>
                        </div>
                        
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="feature">Start Date:</label>
                                <input type="text" id="start_date" class="form-control" required="required" name="start_date" value="{{ isset($item["start_date"])?$item["start_date"]:'' }}"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feature">End Date:</label>
                                <input type="text" id="end_date"  class="form-control" required="required" name="end_date" value="{{ isset($item["end_date"])?$item["end_date"]:'' }}"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Note:</label>
                            <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($item["description"])?$item["description"]:'' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="addedit_form_submit">{{ (!isset($id))? "CREATE" :"UPDATE"}}</button>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

