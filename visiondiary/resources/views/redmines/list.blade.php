<div class="card-body">
    
    <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-pencil f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$status['assigned']}}</h2>
                                    <p class="m-b-0">Assigned</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-exclamation-triangle f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$status['pending']}}</h2>
                                    <p class="m-b-0">Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-check f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$status['resolved']}}</h2>
                                    <p class="m-b-0">Resolved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-light"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$status['feedback']}}</h2>
                                    <p class="m-b-0">Feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!--<h4 class="card-title">Data Export</h4>-->
    <!--<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>-->
    <div class="table-responsive m-t-10">
        <table id="listTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Redmine No.</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $k => $item)
                <tr>
                    <td>
                        <a href="{{action('RedminesController@edit',$item->id)}}" class="btn btn-primary edit fa fa-edit" >
                        </a>
                        <a href="{{action('RedminesController@delete',$item->id)}}" class="btn btn-primary delete fa fa-trash-o"></a>
                    </td>
                    <td>{{++$k}}</td>
                    <td>
                        @if(count($item->link) > 0)
                            <?php $link = $item->link; ?>
                        @else
                            <?php $link = "https://redmine.visiontravel.ca/issues/".$item->redmine_no; ?>   
                        @endif
                        <a href="{{$link}}" target="_blank">{{$item->redmine_no}}</a>
                    </td>
                    <td>{{$item->title}}</td>
                    <td>
                        <?php $class = "badge-danger"; ?>
                        @if(strtoupper($item->status) == "RESOLVED")
                        <?php $class = "badge-success"; ?>
                        @elseif(strtoupper($item->status) == "PENDING") 
                        <?php $class = "badge-warning"; ?>
                        @elseif(strtoupper($item->status) == "ASSIGNED") 
                         <?php $class = "badge-info"; ?>
                        @elseif(strtoupper($item->status) == "FEEDBACK") 
                         <?php $class = "badge-default"; ?>
                        @endif
                        <span class="badge <?= $class?>">{{$item->status}}</span>
                    </td>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>