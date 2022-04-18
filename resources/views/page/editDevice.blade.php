@extends('master')
@section('content')
<div >
    <p class="title-left"> Thiết bị > </p>
    <p class="title-right2">Danh sách thiết bị ></p>
    <p class="title-right3">Cập nhật thiết bị</p>
  </div>

  <div>
      <h2 class="title">Quản lý thiết bị</h2>
  </div>

  <div>
    <img src="admin/assets/images/chuong.png" alt="right" class="chuong">
  </div>
  <div>
    <a href="{{route('personnalAccount')}}"><img src="admin/assets/images/avatar-mini.png" alt="right" class="mini"></a>
  </div>
  <div>
    <p class="hello">Xin Chào</p>
  </div>
  <div>
    <h2 class="name-hello">{{Auth::user()->fullname}}</h2>
  </div>

  <div class="main">
        <p class="info-device">Thông tin thiết bị</p>
        <form action="#" method="POST">
            @csrf

            <div>
                <label class="id-device">Mã thiết bị: <span style="color:red">*</span></label>
                <input type="text" name="id" class="form-control1" value="KOI-01" placeholder="Nhập mã thiết bị"/>    
            <div>

            <div>
                <label class="name-device">Tên thiết bị: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="id" class="form-control2" value="KOI-01" placeholder="Nhập tên thiết bị"/>    
            <div>

            <div>
                <label class="ip-device">Địa chỉ IP: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="id" class="form-control3" value="KOI-01" placeholder="Nhập Địa chỉ IP"/>    
            <div>  

            <div>
                <label class="service">Dịch vụ sử dụng <span style="color:#FF4747;">*</span></label>
                <input type="text" name="service" class="form-control4" value="KOI-01" placeholder="Nhập dịch vụ sử dụng"/>    
            <div>

            <div>
                <p class="title-action2">Loại thiết bị <span style="color:#FF4747;">*</span></p>
                <select class="select-action2">
                    <option value="0" >Chọn loại thiết bị</option>
                    <option value="1" selected>Kiosk</option>
                    <option value="2">Display counter</option>
                </select>
            </div>

            <div>
                <label class="username">Tên đăng nhập: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="username" class="form-control5" value="KOI-01" placeholder="Nhập tài khoản"/>    
            <div> 

            <div>
                <label class="password">Mật khẩu: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="password" class="form-control6" value="KOI-01" placeholder="Nhập mật khẩu"/>    
            <div>

            <div>
                <p class="note"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</p>
            </div>

            <div>
                <a href="{{route('device')}}" class="cancel-button" >  <p class="p-cancel">Hủy bỏ</p></a>
         
                <button type="submit" class="continue-button" id="button-login"> <span class="submit-add"> Cập nhật</span></button>
            </div>

        </form>
  </div>

  

@endsection