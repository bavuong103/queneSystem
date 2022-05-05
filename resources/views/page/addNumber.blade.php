@extends('master')
@section('content')
<div >
    <p class="title-left"> Cấp số > </p>
    <p class="title-right2">Danh sách cấp số ></p>
    <p class="title-right3">Cấp số mới</p>
  </div>

  <div>
      <h2 class="title">Quản lý cấp số</h2>
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

  <div class="main" style="height: 80%">
        <p class="info-number" >CẤP SỐ MỚI</p>

        <p class="service-option">Dịch vụ khách hàng lựa chọn</p>
            {{-- @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif --}}

        <form action="{{route('addService')}}" method="POST">
            @csrf

            <select class="select-original" id="sortAction" style="left:500px;top:150px">

                <option value="1" >Khám tim mạch</option>
                <option value="2"  >Khám sản - phụ khoa</option>
                <option value="3" >Khám răng hàm mặt</option>
                <option value="4" >Khám tai mũi họng</option>
            </select>

            <div>
                <a href="{{route('number')}}" class="cancel-button" style="top:300px">  <p class="p-cancel">Hủy bỏ</p></a>
         
                <button type="submit" class="continue-button" id="button-login" style="top:300px"> <span class="submit-add"> In số</span></button>
            </div>

        </form>
  </div>

  

@endsection