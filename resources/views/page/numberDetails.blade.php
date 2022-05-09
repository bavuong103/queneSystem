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
            <p class="mathietbi-content" style="width:100px">{{$number->fullname}}</p>
        </div>
      
        <div>
            <label class="tenthietbi-label"> Tên dịch vụ: </label>
            <p class="tenthietbi-content" style="width:200px"><?php
              if($number->service==1)
              {
                echo "Khám tim mạch";
              }else if($number->service==2){
                echo "Khám sản - Phụ khoa";
              }else if($number->service==3){
                echo "Khám răng hàm mặt";
              }else if($number->service==4){
                echo "Khám tai mũi họng";
              }
            ?></p>
        </div>
        <div>
            <label class="ipthietbi-label"> Số thứ tự: </label>
            <p class="ipthietbi-content" style="width:100px">{{$number->id}}</p>
        </div>
        <div>
            <label class="dvthietbi-label"> Thời gian cấp: </label>
            <p class="dvthietbi-content2" style="width:200px">{{$number->created_at}}</p>
        </div>
        <div>
            <label class="dvthietbi-label2"> Hạn sử dụng: </label>
            <p class="dvthietbi-content3" style="width:200px">{{$number->dateUsed}}</p>
        </div>
        <div>
            <label class="loaithietbi-label"> Nguồn cấp: </label>
            <p class="loaithietbi-content" style="width:100px">{{$number->original}}</p>
        </div>
        <div>
            <label class="tkthietbi-label"> Trạng thái: </label>
            <p class="tkthietbi-content" style="width:100px">
              <?php
                          if($number->status==1)
                          {
                            echo "Đang chờ";
                          }else if($number->status==2){
                            echo "Đã sử dụng";
                          }else if($number->status==3){
                            echo "Bỏ qua";
                          }
                        ?>
            </p>
        </div>
        <div>
            <label class="mkthietbi-label"> Số điện thoại: </label>
            <p class="mkthietbi-content" style="width:100px">{{$number->phone}}</p>
        </div>
        <div>
            <label class="mkthietbi-label2"> Địa chỉ email: </label>
            <p class="mkthietbi-content2" style="width:100px">{{$number->email}}</p>
        </div>

  </div>

  

@endsection