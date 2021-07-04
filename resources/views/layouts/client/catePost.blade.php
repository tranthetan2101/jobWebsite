@include('layouts.client.search')
<section class="listjob --mg_top_60 ">
    <div class="container">
        <div class="row">
            <!-- pan theo mục /trai-->
            @include('layouts.client.list-cate')
            <!-- danh sach job /phai-->
            <div class="listjob__list col-md-8 col-sm-12">
                <!-- phan tung job -->
                <div class="listjob__list-main">
                    <ul class="joblist">

                        <?php $stt=1; ?>
                        @foreach($cateId as $detail)
                        <li class="joblist__item">
                            <div class="joblist__item-wrap">
                                <span class="joblist__item-number"><?php echo  $stt++; ?>. </span>
                                <a href="{{url('/post',$detail->id)}}" class="joblist__item-info">
                                    <h1>Việc làm : {{$detail->post_name}}</h1>
                                    <span>Hình thức: {{$detail->hinh_thuc}} TPHCM | Thu nhập:
                                        {{$detail->thu_nhap}} |
                                        Số lượng: {{$detail->so_luong}}</span>
                                </a>
                            </div>
                            <div class="joblist__item-hannop">
                                <p>Hạn nộp: {{$detail->han_nop}}</p>
                                <a href="{{url('/up_cv/post',$detail->id)}}">ứng tuyển</a>
                                <span>HOT</span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!--  bot-->
                {{-- pagination --}}
                <div class="listjob__list-bot">
                    <div class="pagination">
                        <div class="listjob__list-bot">
                            <div class="pagination">
                                {{ $cateId->links('vendor.pagination.semantic-ui') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    <br><br>
</section>