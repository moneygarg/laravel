<div class="basic-form col-md-12">
    <form method="post" action="{{url('/find/events')}}" id="filter_form">
        <div class="form-group">
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Title:</label></div>
                <div class='col-md-4'>
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <input type="text" class="form-control" name="event" placeholder="title" id="filter_event"/>
                </div>
            </div>
            <div class='row expand_row'>
                <div class='col-md-2'><label for="tag">Users:</label></div>
                <div class='col-md-4'>
                     <select class="form-control chosen-select" name="id_user" id="filter_id_user" data-placeholder="Select Project">
                        <option value=""></option>
                        @foreach ($users->all() as $k => $user)
                            @if(in_array($user->type,array("developer")))
                                @continue
                            @endif
                            <option value="{{ $user->id }}">{{ ucfirst($user->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class='row expand_row'>
                <div class='col-md-4'>
                    <button class="btn btn-primary" id="filter_form_submit">Submit</button>&nbsp;
                    <button class="btn btn-default" id="filter_form_reset">Reset</button>
                </div>
            </div>
            </div>
    </form>
</div>