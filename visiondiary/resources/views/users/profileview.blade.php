<table>
            <tr>
                <td style="vertical-align: top;">
                   <div class="col-md-12">
                        <a class="edit_image fa fa-image" href="#" aria-expanded="true">
                            <span class="hide-menu">Change</span>
                        </a>
                       <?php
                        $imagePath = "images/no_avatars.jpg";
                        if (isset($users->image)) {
                            $imagePath = "images/avatars/" . $users->image;
                        }
                        ?>
                        <img src="{{asset($imagePath)}}" alt="user" class="profile-pic" height="150px" />

                    </div> 
                </td>
                <td>
                    <div class="col-md-10">
                        <div class="col-md-3">Name:</div>
                        <div class="col-md-9"><strong>{{ ucfirst($users->name) }}</strong></div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-3">Email:</div>
                        <div class="col-md-9"><strong>{{ $users->email}}</strong></div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-3">Role:</div>
                        <div class="col-md-9"><strong>{{ ucfirst($users->type) }}</strong></div>
                        <div class="col-md-12"><hr></div>   
                        <div class="col-md-3">Your Words:</div>
                        <div class="col-md-9"><strong>{{ ucfirst($users->description) }}</strong></div>
                        <div class="col-md-12"><hr></div>   
                        <div class="col-md-3">last Activity:</div>
                        <div class="col-md-9"><strong>{{ ucfirst($users->updated_at) }}</strong></div>
                        <div class="col-md-12"><hr></div>   
                    </div>
                </td>
            </tr>
        </table>