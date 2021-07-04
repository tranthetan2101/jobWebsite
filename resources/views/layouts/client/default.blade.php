<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Hi Time Tuyển Dụng</title>
    <link rel="icon" href="favicon.ico">
    <meta name="title" content="" />
    <meta name="description" content="" />
    <!-- meta facebook -->
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="source/assets/dest/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css



    ">
</head>

<body>
    <header class="header">
        <div class="container">
            <!-- logo -->
            <div class="header__logo">
                <a href="/"><img src="source/assets/images/cropped-HiTime.png" alt=""></a>
                <h1 class="--hidden">Tìm việc làm</h1>
            </div>
            <div class="header__wrap">

                <!-- menu -->
                <ul class="header__menu">
                    <li class="header__menu-list"><a href="/">Trang chủ</a> </li>
                    <li class="header__menu-list"><a href="/blog">Blog</a></li>
                    <li class="header__menu-list"><a href="/findjob">Tìm việc</a></li>
                    <li class="header__menu-list"><a href="https://www.facebook.com/hitimevn" target="_blank">Hỗ trợ</a>
                    </li>

                </ul>
                <!-- ketqua -->

                {{-- <p class="header__result-text">
                    <a href="/result" class="result">Kết quả ứng tuyển<img src="source/assets/images/ketqua_icon.svg"
                            class="header__result-img"></a>
                </p> --}}

                <a href="/result" class="header__result">
                    <img src="source/assets/images/ketqua_icon.svg" class="header__result-img">
                    <p class="header__result-text ">
                        Kết quả ứng tuyển
                    </p>
                </a>

            </div>
            <!-- btnmenu -->
            <img class="btn__menu" src="img/menu.svg" alt="">
        </div>
    </header>

    <main class="mainwrapper" role="main">
        <section class="top"></section>
        <br>
        <br>
        <br>
        {{-- main content --}}

        @yield('content')

        {{-- end main content --}}
    </main>
    <br><br>
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <!-- left -->
                    <div class="col-lg-6 col-md-12 footer__top-left">
                        <div class="footer__head">
                            <strong>Công Ty Cổ Phẩn Công Nghệ HiTime</strong>
                        </div>
                        <div class="footer__info">
                            <p>Trụ sở chính tại Thành phố Hồ Chí Minh</p>
                            <span>Lầu 2, Tòa nhà NK 270-272, Đường Cộng Hỏa, Phường 13, Quận Tân Bình, Hồ Chí
                                Minh</span>
                            <a href="">Xem bản đồ</a>
                        </div>
                        <div class="footer__contact">
                            <strong>Số điện thoại: <span>(028) 999 68 688 – 090 372 5050 (8:00-17:00 Thứ 2 đến Thứ
                                    6)</span></strong>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-lg-3 col-md-6 footer__top-right">
                        <strong>VỀ CÔNG TY</strong>
                        <a href="https://hitime.vn/ve-chung-toi/">Giới thiệu công ty</a>
                        <a href="">Chính sách đãi ngộ</a>
                        <a href="">Điều khoản sử dụng</a>
                    </div>
                    <div class="col-lg-3 col-md-6 footer__top-right">
                        <strong>HỖ TRỢ</strong>
                        <a href="/result">Kiểm tra kết quả ứng tuyển</a>
                        <a href="">Tìm việc gần bạn</a>
                        <a href="">Câu hỏi thường gặp</a>
                        <a href="">Quy trình tuyển dụng</a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <span>© Copyright 2020 by HiTime Corporation. All Right Reserved</span>
            </div>

        </div>
    </footer>
    <script src="source/assets/dest/main.js"></script>
</body>

</html>