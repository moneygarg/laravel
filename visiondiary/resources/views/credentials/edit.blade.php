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
                        <form method="post" action="{{ (!isset($id))?url('/edit/credentials'):url('/edit/credentials/'.$id)}}"  
                              id="addedit_form">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="form-group">
                                <!--<input type="hidden" value="{{csrf_token()}}" name="_token" />-->
                                <label for="title">Project type : <span class="asterisk">*</span></label>
                                <select name="id_project_type" class="form-control" id="id_project_type" required>
                                @foreach ($projecttypes->all() as $k => $projecttype)
                                    <option value="{{ $projecttype->id }}" {{ ((isset($credential["id_project_type"]) && $credential["id_project_type"] == $projecttype->id)?'selected':'') }}>{{ $projecttype->title }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">ENV : <span class="asterisk">*</span></label>
                                <select name="id_environment_type" class="form-control" id="id_environment_type" required>
                                    <option value="DEV" {{ ((isset($credential["id_environment_type"]) && $credential["id_environment_type"] == "DEV")?'selected':'') }}>Dev</option>
                                    <option value="STAGING" {{ ((isset($credential["id_environment_type"]) && $credential["id_environment_type"] == "Staging")?'selected':'') }}>Staging</option>
                                    <option value="PROD" {{ ((isset($credential["id_environment_type"]) && $credential["id_environment_type"] == "Prod")?'selected':'') }}>Prod/Live</option>
                                    <option value="RGUPTA" {{ ((isset($credential["id_environment_type"]) && $credential["id_environment_type"] == "Rgupta")?'selected':'') }}>Rgupta</option>
                                    <option value="LOCAL" {{ ((isset($credential["id_environment_type"]) && $credential["id_environment_type"] == "local")?'selected':'') }}>Local</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Link/Title : <span class="asterisk">*</span></label>
                                <input type="text" class="form-control" name="link" id="link" value="{{ isset($credential->link)?$credential->link:""}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="username">Username : <span class="asterisk">*</span></label>
                                <input type="text" class="form-control" name="username" id="username" value="{{ isset($credential->username)?$credential->username:""}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password : <span class="asterisk">*</span></label>
                                <input type="text" class="form-control" name="password" id="password" value="{{ isset($credential->password)?$credential->password:""}}" required/>
                            </div>

                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea cols="5" rows="5" class="form-control" name="description">{{ isset($credential->description)?$credential->description:""}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tag">Active:</label>
                                <select class="form-control" name="active" required="active">
                                    <option value="" >Select</option>
                                    <option selected="selected" value="1" {{ ((isset($credential["active"]) && $credential["active"] == 1)?'selected':'') }} >{{ ucfirst("Yes")}}</option>
                                    <option value="0" {{ ((isset($credential["active"]) && $credential["active"] == 0)?'selected':'') }} >{{ ucfirst("No")}}</option>
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

