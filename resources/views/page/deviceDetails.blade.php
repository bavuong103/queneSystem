@extends('master')
@section('content')
<div >
    <p class="title-left"> Thiết bị > </p>
    <p class="title-right2">Danh sách thiết bị ></p>
    <p class="title-right3">Chi tiết thiết bị</p>
  </div>

  <div>
      <h2 class="title">Quản lý thiết bị</h2>

      <div>
        <a href=""><img src="admin/assets/images/update.png" alt="right" class="update-button"></a>
      </div>


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

        <div>
            <label class="mathietbi-label"> Mã thiết bị: </label>
            <p class="mathietbi-content">{{$device->id}}</p>
        </div>
      
        <div>
            <label class="tenthietbi-label"> Tên thiết bị: </label>
            <p class="tenthietbi-content">{{$device->name}}</p>
        </div>
        <div>
            <label class="ipthietbi-label"> Địa chỉ IP: </label>
            <p class="ipthietbi-content">{{$device->addressIP}}</p>
        </div>
        <div>
            <label class="dvthietbi-label"> Dịch vụ sử dụng: </label>
            <p class="dvthietbi-content">{{$device->service}}</p>
        </div>
        <div>
            <label class="loaithietbi-label"> Loại thiết bị: </label>
            <p class="loaithietbi-content">{{$device->category}}</p>
        </div>
        <div>
            <label class="tkthietbi-label"> Tên đăng nhập: </label>
            <p class="tkthietbi-content">{{$device->username}}</p>
        </div>
        <div>
            <label class="mkthietbi-label"> Mật khẩu: </label>
            <p class="mkthietbi-content">{{$device->password}}</p>
        </div>

  </div>

  

@endsection