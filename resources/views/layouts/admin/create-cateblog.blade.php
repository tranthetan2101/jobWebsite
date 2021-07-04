<div class="modal fade" id="exampleModal_createblog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('/admin/categoryblog/add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="recipient-name" class="col-form-label">Tên danh mục:</label>
                    <input type="text" class="form-control" name="category_name_blog">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
