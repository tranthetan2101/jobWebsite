<section class="boxnamerecruit">
    <span>Bạn đang ứng tuyển vị trí</span>
</section>

<section class="formrecruit">
    <div class="container">
        <form action="{{url('/up_cv/post/add')}}" method="post" enctype="multipart/form-data" name="formCV">
            <div class="formrecruit__personal">
                <!-- @csrf -->
                {{ csrf_field() }}
                <h4 class="down">Thông tin cá nhân</h4>
                <!-- gioi tinh -->
                <div class="formrecruit__personal-gentt">
                    <div class="formrecruit__personal-gender">
                        <strong>Giới tính</strong>
                        <input type="radio" id="nam" name="gioitinh" value="nam">
                        <label for="nam">Nam</label><br>
                        <input type="radio" id="nu" name="gioitinh" value="nu">
                        <label for="nu">Nữ</label><br>
                    </div>
                    <div class="formrecruit__personal-gender">
                        <strong>Tình Trạng Hôn Nhân</strong>
                        <input type="radio" id="dakethon" name="giadinh" value="da ket hon">
                        <label for="dakethon">Đã Kết Hôn</label><br>
                        <input type="radio" id="docthan" name="giadinh" value="doc than">
                        <label for="docthan">Độc Thân</label><br>
                    </div>
                </div>
                <strong>Họ tên đầy đủ của bạn</strong>
                <input class="input" type="text" name="fullname" placeholder="Nguyễn Văn A">
                <!-- thông tin cá nhân -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <strong>Ngày tháng năm sinh</strong>
                        <input class="input" type="text" name="namsinh" placeholder="VD: 26/06/1985">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <strong>CMND / Căn cước</strong>
                        <input class="input" type="text" name="cmnd" placeholder="VD: 381257865">
                    </div>
                </div>
                <!-- địa chỉ -->
                <strong>Địa chỉ tạm trú hiện nay</strong>
                <input type="text" name="diachi" class="input">
                <!-- sdt -->
                <strong>Số di động của bạn</strong>
                <input type="tel" name="phone" class="input">
                <!-- bang cap -->
                <strong>Bằng Cấp</strong>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="radio" id="thcs" name="bangcap" value="thcs">
                        <label for="thcs">Trung Học Cơ Sở</label><br>
                        <input type="radio" id="thpt" name="bangcap" value="thpt">
                        <label for="thpt">Trung Học Phổ Thông</label><br>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="radio" id="cd" name="bangcap" value="cd">
                        <label for="cd">Cao Đẳng</label><br>
                        <input type="radio" id="dh" name="bangcap" value="dh">
                        <label for="dh">Đại Học</label><br>
                    </div>
                </div>

                <!-- email -->
                <strong>Email nhận kết quả tuyển</strong>
                <input class="input" type="email" name="email">
                <!-- gioithieu -->
                <strong>Giới thiệu về bản thân</strong>
                <textarea name="gioithieu" cols="30" rows="10"></textarea><br>
                <label>Ảnh Chụp Cá Nhân Rõ Mặt</label>
                <input type="file" name="image_cv" id="image_cv"><br>
                <label>Upload CV Tối Đa 5MB</label>
                <input type="file" name="CV" id="CV">
                <input type="hidden" name="id_post" value="{{ $content->id }}">
                <button type="submit" class="btnnext">gửi</button>
            </div>
        </form>
    </div>
</section>