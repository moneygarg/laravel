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
                        <form method="post" action="{{ (!isset($id))?url('/edit/user'):url('/edit/user/'.$id)}}"  id="addedit_form">
                            <div class="form-group">
                              <meta name="csrf-token" content="{{ csrf_token() }}">
                              <!--<input type="hidden" value="{{csrf_token()}}" name="_token" />-->
                              <label for="name">Name:</label>
                                <input type="text" required class="form-control" name="name" value="{{ isset($users["name"])?$users["name"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Email:</label>
                                <input type="text" required class="form-control" name="email" value="{{ isset($users["email"])?$users["email"]:'' }}"/>
                            </div>
                            @if(!isset($users["password"]))
                            <div class="form-group">
                                <label for="tag">Password:</label>
                                <input type="text" required class="form-control" name="password" value="{{ isset($users["password"])?$users["password"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password:</label>
                                <input type="text" required class="form-control" id="password_confirmation" name="password_confirmation" value="{{ isset($users["password"])?$users["password"]:'' }}"/>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="tag">Type:</label>
                                <select class="form-control" name="type" required>
                                    <option value="" >Select Type</option>
                                    <option value="admin" {{ ((isset($users["type"]) && $users["type"] == "admin")?'selected':'') }} >Admin</option>
                                    <option value="developer" {{ ((isset($users["type"]) && $users["type"] == "developer")?'selected':'') }} >Developer</option>
                                    <option value="user" {{ ((isset($users["type"]) && $users["type"] == "user")?'selected':'') }} >User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Description:</label>
                                <input type="description" required class="form-control" name="description" value="{{ isset($users["description"])?$users["description"]:'' }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Active:</label>
                                <select class="form-control" name="active" required>
                                    <option value="" >Select Type</option>
                                    <option value=1 {{ ((isset($users["active"]) && $users["active"] == 1)?'selected':'') }} >Yes</option>
                                    <option value=0 {{ ((isset($users["active"]) && $users["active"] == 0)?'selected':'') }} >No</option>
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

