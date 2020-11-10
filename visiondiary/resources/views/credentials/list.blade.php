<div class="card-body">
    <!--<h4 class="card-title">Data Export</h4>-->
    <!--<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>-->
    <div class="table-responsive m-t-10">
        <table id="listTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    @if($user->type != "user" || $type == "personnel")
                    <th>Action</th>
                    @endif
                    <th>ID</th>
                    <th>Project</th>
                    <th>ENV</th>
                    <th>Link</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($credentials as $k => $credential)
                    <tr>
                        @if($user->type != "user" || $type == "personnel")
                         <td>
                            <a href="{{action('CredentialsController@edit',$credential->id)}}" class="btn btn-primary edit fa fa-edit" >
                            </a>
                            <a href="{{action('CredentialsController@delete',$credential->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                        </td>
                        @endif
                        <td>{{++$k}}</td>
                        <td>{{$credential->Title}}</td>
                        <td>{{$credential->id_environment_type}}</td>
                        <td>{{$credential->link}} 
                            <a href="javascript:void()" cp="{{$credential->link}}" class="btn btn-success copy fa fa-copy pull-right" >
                            </a>
                        </td>
                        <td>{{$credential->username}}  
                            <a href="javascript:void()" cp="{{$credential->username}}" class="btn btn-success copy fa fa-copy pull-right" >
                            </a>
                        </td>
                        <td>{{ substr($credential->password,0,10) }}  
                            <a href="javascript:void()" cp="{{ decrypt($credential->password) }}" class="btn btn-success copy fa fa-copy pull-right" >
                            </a>
                        </td>
                        <td>{{$credential->description}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>