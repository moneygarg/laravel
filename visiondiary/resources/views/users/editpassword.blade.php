<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#editpassword">
                    <span class="glyphicon glyphicon-plus"></span> 
                    <strong id="title">UPDATE PASSWORD</strong>
                </a>
            </h4>

        </div>
        <div id="editpassword" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="card-body">
                    <div class="basic-form col-md-6">
                        <form method="post" action="{{ (!isset($id))?url('/edit/user'):url('/edit/user/'.$id.'/password')}}"  id="addedit_form">
                            <div class="form-group">
                              <meta name="csrf-token" content="{{ csrf_token() }}">
                                <label for="tag">Currrent Password:</label>
                                <input type="text" required class="form-control" name="old_password" id="old_password" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="tag">Password:</label>
                                <input type="text" required class="form-control" name="password" id="password" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password:</label>
                                <input type="text" required class="form-control" id="password_confirmation" name="password_confirmation" value=""/>
                            </div>
                            <button type="submit" class="btn btn-primary" id="addedit_form_submit">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

