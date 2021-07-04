<h1>Creat post</h1>
<form action="{{ url('/admin/create-post/add') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" name="post_name" placeholder="Tên tiêu đề">
    </div>
    <textarea class="form-control mt-3" name="post_description" placeholder="nhập mô tả"></textarea>
    <textarea class="form-control mt-3" name="post_yeucau" placeholder="nhập yêu cầu"></textarea>
    <textarea class="form-control mt-3" name="post_quyenloi" placeholder="nhập quyền lợi"></textarea>
    <div class="row">
        <div class="col-6 mt-3">
            <select name="category_name" class="form-control">
                <option selected>Choose...</option>
                @foreach($Categoryjob as $cate)
                <option value="{{$cate->id_cate_post}}">{{$cate->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="noilam" placeholder="nhập nơi làm việc">
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="bangcap" placeholder="nhập bằng cấp">
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="hinhthuc" placeholder="nhập hình thức làm">
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="kinhnghiem" placeholder="nhập kinh nghiệm">
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="thunhap" placeholder="thu nhập">
        </div>
        <div class="col-6 mt-3">
            <input type="text" class="form-control" name="soluong" placeholder="số lượng">
        </div>
        <div class="col-6 mt-3">
            <input class="form-control" type="date" name="hannop">
        </div>
    </div>
    <button class="btn btn-success mt-3" type="submit">Thêm Công việc</button>
</form>