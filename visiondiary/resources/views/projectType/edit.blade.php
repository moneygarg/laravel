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
                    <div class="basic-form col-md-6">
                        
                        <form method="post" action="{{ (!isset($id))?url('/edit/projectType'):url('/edit/projectType/'.$id)}}"  
                              id="addedit_form">
                            <div class="form-group">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <!--<input type="hidden" value="{{csrf_token()}}" name="_token" />-->
                                <label for="title">Project Title:</label>
                                <input type="text" class="form-control" required="required" name="title" value="{{ isset($projecttypes["title"])?$projecttypes["title"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Short Name:</label>
                                <input type="text" class="form-control"  required name="short_tag" value="{{ isset($projecttypes["short_tag"])?$projecttypes["short_tag"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Type:</label>
                                <select class="form-control" name="type" required="required">
                                    <option value="" >Select Type</option>
                                    <option value="vision" {{ ((isset($projecttypes["type"]) && $projecttypes["type"] == "vision")?'selected':'') }} >Vision</option>
                                    <option value="other" {{ ((isset($projecttypes["type"]) && $projecttypes["type"] == "other")?'selected':'') }} >Other</option>
                                    <option value="personnel" {{ ((isset($projecttypes["type"]) && $projecttypes["type"] == "personnel")?'selected':'') }} >Personnel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($projecttypes["description"])?$projecttypes["description"]:'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tag">Active:</label>
                                <select class="form-control" name="active" required="active">
                                    <option value="" >Select</option>
                                    <option selected="selected" value="1" {{ ((isset($projecttypes["active"]) && $projecttypes["active"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($projecttypes["active"]) && $projecttypes["active"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" id="addedit_form_submit">{{ (!isset($id))? "CREATE" :"UPDATE"}}</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

