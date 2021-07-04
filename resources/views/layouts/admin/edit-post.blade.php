
<h1>edit post</h1>
<form action="{{ url('/admin/update', $content->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type="text" name="post_name" placeholder="nhập tên bài đăng">
    <textarea class="form-control" name="post_description" placeholder="nhập mô tả"></textarea>
    <select name="category_name">
        @foreach($Categoryjob as $cate)
        <option value="{{$cate->id}}">{{$cate->category_name}}</option>
        @endforeach
    </select>
    <input type="text" name="noilam" placeholder="nhập nơi làm việc">
    <input type="text" name="bangcap" placeholder="nhập bằng cấp">
    <input type="text" name="hinhthuc" placeholder="nhập hình thức làm">
    <input type="text" name="kinhnghiem" placeholderplaceholder="nhập kinh nghiệm">
    <input type="text" name="thunhap" placeholder="thu nhập">
    <input type="text" name="soluong" placeholder="số lượng">
    <input type="date" name="hannop">
    <button type="submit">thêm</button>
</form>