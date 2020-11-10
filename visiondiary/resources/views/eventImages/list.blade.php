<div class="table-responsive m-t-40">
    <table id="listImageTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Event Name.</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $k => $image)
            <tr>
                <td>
                    <a href="{{action('EventsController@editimage',$image->id)}}" class="btn btn-primary edit fa fa-edit" >
                    </a>
                    <a href="{{action('EventsController@deleteimage',$image->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                </td>
                <td>{{++$k}}</td>
                <td>{{ $image->title }}</td>
                <td><img src="{{url('images/uploads/').'/'.$image->image }}" alt="" style="height: 62px; width: 63px"></td>
                <td>{{ $image->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>