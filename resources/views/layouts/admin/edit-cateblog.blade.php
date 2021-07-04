<h1>Edit cate blog</h1>
<form action="{{ url('/admin/update-cateblog',$idBlog->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type=" text" name="category_name_blog" placeholder="nhập tên danh mục blog">
    <button type="submit">update</button>
</form>