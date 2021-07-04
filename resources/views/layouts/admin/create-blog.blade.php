<form action="{{url('/admin/blog/add')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="blog_title" placeholder="Title" class="form-control mb-3">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required name="blog_image">
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
    <label>Content</label>
    <textarea class="form-control" id="blog_content" name="blog_content"></textarea>
    <select name="categoryblog_name" class="form-control mt-3">
        <option selected>Choose...</option>
        @foreach($Categoryblog as $cateblog)
        <option value="{{$cateblog->id}}">{{$cateblog->categoryblog_name}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-success mt-3">Thêm bài viết</button>
</form>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('blog_content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>