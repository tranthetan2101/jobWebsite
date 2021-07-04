<section class="mainblog">
    <div class="container">
        <div class="row">
            <!-- left -->
            <div class="mainblog__list col-lg-8 col-md-8">
                <!-- title -->
                @foreach($getBlogbyId as $blogs)
                <div class="mainblog__list-title">

                    <h2>{{$blogs->title_blog}}</h2>
                    <span>{{$blogs->created_at}}</span>
                </div>
                <!--  noi dung chinh-->
                <div class="mainblog__list-content" >
                    {!!$blogs->content_blog!!}
                </div>
                @endforeach
                <br>
                <br>
                <br>
                <br>
                <!-- ban tin  -->
                <div class="newssame">
                    <h3>
                        Blog
                    </h3>
                    <div class="row">
                        <?php $count=0; ?>
                        @foreach ($getBlog as $item)
                        <?php $count++; ?>
                        @if ($count<=4) <a class="newssame__item col-md-6 col-sm-12"
                            href="{{url('/blog',$item->id)}}">
                            <div class="newssame__item-img">
                                <img src="{{ asset('storage/photo/' . $item->image_blog) }}" alt="{{$item->image_blog}}"
                                    class="img-fluid">
                            </div>
                            <p class="newssame__item-title">{{$item->title_blog}}</p>
                            </a>
                            @endif
                            @endforeach
                    </div>
                </div>
                <!-- cmt -->
                <div class="comment0">
                    <h5 class="comment0__title">
                        Thảo luận về chủ đề này
                    </h5>
                    <form action="" class="comment0__form">
                        <textarea name="" id="" cols="30" rows="1" maxlength="1000" placeholder="Mời bạn đặt câu hỏi"
                            class="comment0__form-textarea"></textarea>
                        <div class="comment0__form-gender">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Anh</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Chị</label><br>
                        </div>
                        <input type="text " class="comment0__form-name" placeholder="Họ tên (bắt buộc)">
                        <input type="text " class="comment0__form-email" placeholder="Email">
                        <input type="submit" value="Gửi" class="comment0__form-submit">
                    </form>
                </div>
            </div>
            <!-- right -->
            <div class="latestnews col-lg-4 col-md-4 recruitment">
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