<div class="listjob__category col-md-4 col-sm-12    ">
    <div class="row">
        <div class="listjob__category-item col-md-12 col-sm-6">
            <div class="listjob__category-title">
                <p>Danh mục công việc</p>
            </div>
            <div class="listjob__category-option">
                @foreach($Categoryjob as $content)
                <a href="{{url('/cate-show',$content->id_cate_post)}}">
                    <h1>{{$content->category_name}}</h1>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>