<section class="menulife">
    <div class="container">
        <div class="menulife__list">
            <a class="menulife__item" href="">Mới nhất</a>
            <a class="menulife__item" href="">Video</a>
            <a class="menulife__item" href="">Tin Công ty</a>
            <a class="menulife__item" href="">Tin tuyển dụng</a>
            <a class="menulife__item" href="">cuộc sống MWG</a>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="blog__list col-lg-8 col-md-12">
                @foreach($getBlog as $blogs)
                <a class="blog__item" href="{{url('/blog',$blogs->id)}}">
                    <div class="row">
                        <div class="blog__item-img col-md-5 col-sm-12">
                            <img src="{{ asset('storage/photo/' . $blogs->image_blog) }}" alt="{{$blogs->image_blog}}"
                                class="img-fluid">
                        </div>
                        <div class="blog__item-info col-md-7 col-sm-12">
                            <h3>{{$blogs->title_blog}}</h3>
                            <p>Cuộc sống MWG <span>- 70 lượt xem</span></p>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- btn -->
                <div>
                    <a class="btnblue" href="">Xem Thêm</a>
                </div>
            </div>
            <!-- right -->
            <div class="latestnews col-lg-4 recruitment">
                <h3>Tin tuyển dụng mới nhất</h3>
                <ul class="joblist">
                    @foreach($detailPost as $item)
                    <li class="joblist__item">
                        <div class="joblist__item-wrap">
                            <a href="{{url('/post',$item->id)}}" class="joblist__item-info ">
                                <h4>{{$item->post_name}}</h4>
                                <span>Hình thức: {{$item->hinh_thuc}} TPHCM | Thu nhập:
                                    {{$item->thu_nhap}} |
                                    Số lượng: {{$item->so_luong}}</span>
                            </a>
                        </div>
                        <div class="joblist__item-hannop">
                            <p>{{$item->post_name}}</p>
                            <a href="{{url('/up_cv/post',$item->id)}}">ứng tuyển</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>