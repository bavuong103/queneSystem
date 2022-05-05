@extends('master')
@section('content')
<div >
    <p class="title-left"> Thiết bị > </p>
    <p class="title-right2">Danh sách cấp số ></p>
    <p class="title-right3">Chi tiết</p>
  </div>

  <div>
      <h2 class="title">Quản lý cấp số</h2>

      <div>
        <a href="{{route('number')}}"><img src="admin/assets/images/back.png" alt="right" class="update-button"></a>
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
        <p class="info-device">Thông tin cấp số</p>

        <div>
            <label class="mathietbi-label"> Họ tên: </label>
            <p class="mathietbi-content">a</p>
        </div>
      
        <div>
            <label class="tenthietbi-label"> Tên dịch vụ: </label>
            <p class="tenthietbi-content">b</p>
        </div>
        <div>
            <label class="ipthietbi-label"> Số thứ tự: </label>
            <p class="ipthietbi-content">c</p>
        </div>
        <div>
            <label class="dvthietbi-label"> Thời gian cấp: </label>
            <p class="dvthietbi-content2">z</p>
        </div>
        <div>
            <label class="dvthietbi-label2"> Hạn sử dụng: </label>
            <p class="dvthietbi-content3">b</p>
        </div>
        <div>
            <label class="loaithietbi-label"> Nguồn cấp: </label>
            <p class="loaithietbi-content">c</p>
        </div>
        <div>
            <label class="tkthietbi-label"> Trạng thái: </label>
            <p class="tkthietbi-content">d</p>
        </div>
        <div>
            <label class="mkthietbi-label"> Số điện thoại: </label>
            <p class="mkthietbi-content">n</p>
        </div>
        <div>
            <label class="mkthietbi-label2"> Địa chỉ email: </label>
            <p class="mkthietbi-content2">n</p>
        </div>

  </div>

  

@endsection