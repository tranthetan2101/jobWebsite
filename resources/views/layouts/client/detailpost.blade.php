<section class="recruitment --bg_grey">
    <div class="container">
        @foreach($detailPost as $detail)
        <h1>{{$detail->post_name}}</h1>
        @endforeach
        <div class="row">
            <!-- left -->
            <div class="col-lg-4 col-md-12">
                <div class="recruitment__info">
                    <ul>
                        @foreach($detailPost as $detail)
                        <li>
                            <span>Nơi làm việc:</span>
                            <strong>{{$detail->noi_lam}}</strong>
                        </li>
                        <li>
                            <span>Cấp bậc:</span>
                            <strong>{{$detail->bang_cap}}</strong>
                        </li>
                        <li>
                            <span>Hình thức:</span>
                            <strong>{{$detail->hinh_thuc}}</strong>
                        </li>
                        <li>
                            <span>Bằng cấp:</span>
                            <strong>{{$detail->bang_cap}}</strong>
                        </li>
                        <li>
                            <span>Kinh nghiệm:</span>
                            <strong>{{$detail->kinh_nghiem}}</strong>
                        </li>
                        <li>
                            <span>Thu nhập:</span>
                            <strong>{{$detail->so_luong}}</strong>
                        </li>
                        <li>
                            <span>Số lượng tuyển</span>
                            <strong>{{$detail->so_luong}}</strong>
                        </li>
                        <li>
                            <span>Hạn nộp hồ sơ:</span>
                            <strong>{{$detail->han_nop}}</strong>
                        </li>
                        <a href="{{url('/up_cv/post',$detail->id_post)}}">Ứng Tuyển</a>
                        @endforeach
                    </ul>

                </div>
            </div>
            <!-- right -->
            <div class=" col-lg-8 col-md-12 --bg_white">
                <!-- khung mo ta -->
                <div class="recruitment__describe">
                    <div class="recruitment__describe-img">
                        @foreach($detailPost as $detail)
                        <img src="" alt="" class="img-fluid">
                        @endforeach
                    </div>
                    <div class="recruitment__describe-info">
                        <h2>MÔ TẢ CÔNG VIỆC</h2>
                        @foreach($detailPost as $detail)
                        <p>{!! $detail->post_description !!}</p>
                        @endforeach
                        <h2>YÊU CẦU CÔNG VIỆC</h2>
                        @foreach($detailPost as $detail)
                        <p>{!! $detail->post_yeucau !!}</p>
                        @endforeach
                        <h2>QUYỀN LỢI</h2>
                        @foreach($detailPost as $detail)
                        <p>{!! $detail->post_quyenloi !!}</p>
                        @endforeach
                    </div>

                </div>
                <br>
                <br>
                <br>
                <!-- workflow -->
                <div class="workflow">
                    <h3>Quy trình tuyển dụng tại HiTime</h3>
                    <!-- left -->
                    <div class="workflow__left">
                        <div class="workflow__left-children">
                            <div class="doc"></div>
                        </div>
                        <div class="workflow__left-children">
                            <div class="doc"></div>
                        </div>
                        <div class="workflow__left-children">
                            <div class="doc"></div>
                        </div>
                        <div class="workflow__left-children">
                            <div class="doc"></div>
                        </div>
                        <div class="workflow__left-children">
                            <div class="doc"></div>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="workflow__right ">
                        <div class="workflow__right-children">
                            <span>1. Đăng ký ứng tuyển</span>
                        </div>
                        <div class="workflow__right-children">
                            <span>2. Sàng lọc hồ sơ</span>
                        </div>
                        <div class="workflow__right-children">
                            <span>3. Phỏng vấn</span>
                        </div>
                        <div class="workflow__right-children">
                            <span>4. Kiểm tra kết quả</span>
                        </div>
                        <div class="workflow__right-children">
                            <span>5. Nhận việc</span>
                        </div>
                    </div>
                </div>
                <!-- bấm like... -->
                <div class="clickrecruit --clear">
                    <div class="clickrecruit__option">
                        @foreach($detailPost as $detail)
                        <a href="{{url('/up_cv/post',$detail->id_post)}}">Ứng Tuyển</a>
                        @endforeach
                    </div>
                </div>
                <!-- cmt -->

                <!-- dat cau hoi -->
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
                <!-- comt cua nguoi khac -->
                <div class="commentQuesAns --clear">
                    <div class="commentQuesAns__ques">
                        <strong class="commentQuesAns__ques-name">
                            Nguyễn Thị Tiên
                        </strong>
                        <p class="commentQuesAns__ques-content">Dạ bài test của em chưa đạt, vậy
                            có cơ hội được nhận việc không ạ. Rất mong nhận được sự phản hồi
                            xin cảm ơn</p>
                        <div class="commentQuesAns__ques-option">
                            <a href=""> Trả lời </a>-
                            <a href=""> Thích </a>-
                            <span> 1 ngày trước</span>
                        </div>
                    </div>
                    <div class="commentQuesAns__ans">
                        <strong class="commentQuesAns__ans-name">
                            Nguyễn Phi Hoàn
                            <i>QTV</i>
                        </strong>
                        <p class="commentQuesAns__ans-content">
                            Chào bạn ! Dạ sẽ còn tuỳ vào từng vị trí công việc và tuỳ vào
                            thời gian bạn đăng kí ứng tuyển thì sẽ có bài test và số lượng
                            câu hỏi khác nhau hoặc không có bài test, nên bạn yên tâm bạn
                            nha. Thông tin đến bạn.
                        </p>
                        <div class="commentQuesAns__ans-option">
                            <a href=""> Trả lời </a>-
                            <a href=""> Thích </a>-
                            <span> 1 ngày trước</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>