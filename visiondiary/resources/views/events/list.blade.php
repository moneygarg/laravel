<div class="card-body">
    <h4 class="card-title">Data Export</h4>
    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
    <div class="table-responsive m-t-40">
        <table id="listTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Event Name.</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $k => $item)
                <tr>
                    <td>
                        <a href="{{action('EventsController@edit',$item->id)}}" class="btn btn-primary edit fa fa-edit" >
                        </a>
                        <a href="{{action('EventsController@delete',$item->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                        <a data-id = "{{$item->id}}" href="{{action('EventsController@upload',$item->id)}}" class="btn btn-primary upload fa fa-file-image-o">
                            Upload Images
                        </a>
                    </td>
                    <td>{{++$k}}</td>
                    <td>{{$item->event}}</td>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>