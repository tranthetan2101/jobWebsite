@include('layouts.client.search')
<section class="life">
    <div class="container">
        <div class="life__wrap boxtext2">
            <div class="boxtext2__head">
                <img src="img/balloons.svg" alt="">
                <h3>Blog HiTime</h3>
            </div>
            <!-- list -->
            <div class="boxtext2__list">
                <?php $count=0; ?>
                @foreach ($getBlog as $item)
                <?php $count++; ?>
                    @if ($count<=3) 
                        <a class="boxtext2__item" href="{{url('/blog',$item->id)}}">
                        <img src="{{ asset('storage/photo/' . $item->image_blog) }}" alt="{{$item->image_blog}}"
                            class="img-fluid">
                        <h2 class="title_img_blog">{{$item->title_blog}}</h2>
                        <p class="create-date">Ngày Đăng: {{$item->created_at}}</p>
                        </a>
                    @endif
                @endforeach
            </div>
            <!-- btn -->
        </div>
    </div>
</section>