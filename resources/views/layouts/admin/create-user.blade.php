<div class="modal fade" id="exampleModal_User" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('/admin/user/add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="recipient-name" class="col-form-label">UserName</label>
                    <input type="text" class="form-control" name="name" placeholder="Username">
                    <label for="recipient-name" class="col-form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email">
                    <label for="recipient-name" class="col-form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <label for="recipient-name" class="col-form-label">Role</label>
                    <select name="type" class="form-control">
                        @foreach($Role as $content)
                        <option value="{{$content->type}}">{{$content->type}}</option>
                        @endforeach
                    </select>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>