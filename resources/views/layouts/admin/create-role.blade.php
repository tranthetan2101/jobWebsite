<h1>Create role</h1>
<form action="{{url('/admin/role/add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="type" placeholder="nhap ten role">
    <button type="submit">add role</button>
</form>