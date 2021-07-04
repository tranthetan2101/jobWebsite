<form action="{{ url('/admin/update-user',$contentId->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
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
    <button type="submit" class="btn btn-success">Update</button>
</form>