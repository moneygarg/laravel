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
                            <label for="events name">Events name</label>
                            <input type="text" class="form-control" required="required" name="event" value="{{ isset($item["event"])?$item["event"]:'' }}"/>
                        </div>

                        <div class="form-group">
                            <label for="public">Public:</label>
                            <select class="form-control" name="public" required="required">
                                <option value="" >Select Type</option>
                                <option selected="selected" value="1" {{ ((isset($item["public"]) && $item["priority"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                <option value="0" {{ ((isset($item["public"]) && $item["public"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="feature">Feature:</label>
                            <select class="form-control" name="feature" required="feature">
                                <option value="" >Select</option>
                                <option selected="selected" value="1" {{ ((isset($item["feature"]) && $item["feature"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                <option value="0" {{ ((isset($item["feature"]) && $item["feature"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($item["description"])?$item["description"]:'' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tag">Active:</label>
                            <select class="form-control" name="active" required="active">
                                <option value="" >Select</option>
                                <option selected="selected" value="1" {{ ((isset($item["active"]) && $item["active"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                <option value="0" {{ ((isset($item["active"]) && $item["active"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="addedit_form_submit">{{ (!isset($id))? "CREATE" :"UPDATE"}}</button>
                    </div>
                       
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

