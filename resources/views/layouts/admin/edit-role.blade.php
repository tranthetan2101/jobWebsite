<h1>Edit Role</h1>
<form action="{{ url('/admin/update-role', $content->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type=" text" name="type" placeholder="nhập tên Role">
    <button type="submit">update</button>
</form>