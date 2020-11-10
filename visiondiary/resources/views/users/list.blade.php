<div class="card-body">
    <h4 class="card-title">Data Export</h4>
    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
    <div class="table-responsive m-t-40">
        <table id="listTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $k => $user)
                <tr>
                    <td>{{++$k}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td colspan="2">
                        <a href="{{action('UserController@edit',['id'=>$user->id, 'type'=>"password"])}}" class="btn btn-primary editpassword fa fa-edit" >
                        password</a>
                        <a href="{{action('UserController@edit',$user->id)}}" class="btn btn-primary edit fa fa-edit" >
                        </a>
                        <a href="{{action('UserController@delete',$user->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>