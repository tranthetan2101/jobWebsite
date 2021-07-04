<h1>Edit cate</h1>
<form action="{{ url('/admin/update-cate', $content->id_cate_post) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type=" text" name="category_name" placeholder="nhập tên danh mục">
    <button type="submit">update</button>
</form>