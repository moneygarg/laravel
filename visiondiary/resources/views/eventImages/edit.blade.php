<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#add">
                    <span class="fa fa-edit"></span> 
                    <strong id="title">{{ (!isset($id))?"ADD":"UPDATE" }} IMAGE</strong>
                </a>
            </h4>

        </div>
        <div id="add" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="card-body">
                    <form method="post" action="{{ (!isset($id))?url('/editimage/events'):url('/editimage/events/'.$id)}}"  
                              id="image_addedit_form">
                    <div class="basic-form col-md-6">
                            <div class="form-group">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <label for="public">Title</label>
                                <input type="text" class="form-control" required="required" name="title" value="{{ isset($item["title"])?$item["title"]:'' }}"/>
                            </div>

                            <div class="form-group">
                                <label for="tag">Public:</label>
                                <select class="form-control" name="public" required="required">
                                    <option value="" >Select Type</option>
                                    <option selected="selected" value="1" {{ ((isset($item["public"]) && $item["public"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($item["public"]) && $item["public"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Feature:</label>
                                <select class="form-control" name="feature" required="feature">
                                    <option value="" >Select</option>
                                    <option selected="selected" value="1" {{ ((isset($item["feature"]) && $item["feature"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($item["feature"]) && $item["feature"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Active:</label>
                                <select class="form-control" name="active" required="active">
                                    <option value="" >Select</option>
                                    <option selected="selected" value="1" {{ ((isset($item["active"]) && $item["active"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($item["active"]) && $item["active"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($item["description"])?$item["description"]:'' }}</textarea>
                            </div>
                        <button type="submit" class="btn btn-primary" id="image_addedit_form_submit">{{ (!isset($id))? "CREATE" :"UPDATE"}}</button>
                    </div>
                       
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

