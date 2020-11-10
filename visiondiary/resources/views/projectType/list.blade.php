<div class="card-body">
    <!--<h4 class="card-title">Data Export</h4>-->
    <!--<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>-->
    <div class="table-responsive m-t-10">
        <table id="listTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projecttypes as $k => $projecttype)
                <tr>
                    <td>{{++$k}}</td>
                    <td>{{$projecttype->title}}</td>
                    <td>{{$projecttype->description}}</td>
                    <td>
                        <a href="{{action('ProjectTypeController@edit',$projecttype->id)}}" class="btn btn-primary edit fa fa-edit" >
                        </a>
                        <a href="{{action('ProjectTypeController@delete',$projecttype->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>