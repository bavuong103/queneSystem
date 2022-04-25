@extends('master')
@section('content')
<div >
    <p class="title-left"> Dịch vụ > </p>
    <p class="title-right2">Danh sách dịch vụ ></p>
    <p class="title-right3">Thêm dịch vụ</p>
  </div>

  <div>
      <h2 class="title">Quản lý dịch vụ</h2>
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
        <p class="info-device">Thông tin dịch vụ</p>

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif

        <form action="{{route('editService',$service->id)}}" method="POST">
            @csrf

            <div>
                <label class="id-device">Mã dịch vụ: <span style="color:red">*</span></label>
                <input type="text" name="id" class="form-control1" value="{{$service->id}}" placeholder="Nhập mã dịch vụ"/>    
            <div>

            <div>
                <label class="name-device">Tên dịch vụ: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="name" class="form-control2" value="{{$service->name}}" placeholder="Nhập tên dịch vụ"/>    
            <div>

            {{-- <div>
                <label class="ip-device">Địa chỉ IP: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="addressIP" class="form-control3" placeholder="Nhập Địa chỉ IP"/>    
            <div>  

            <div>
                <label class="service">Dịch vụ sử dụng <span style="color:#FF4747;">*</span></label>
                <input type="text" name="service" class="form-control4" placeholder="Nhập dịch vụ sử dụng"/>    
            <div>

            <div>
                <p class="title-action2">Loại thiết bị <span style="color:#FF4747;">*</span></p>
                <select class="select-action2" name="category">
                    <option value="0" selected>Chọn loại thiết bị</option>
                    <option value="Kiosk">Kiosk</option>
                    <option value="Display counter">Display counter</option>
                </select>
            </div> --}}

            <div>
                <label class="title-action2">Mô tả:</label>
                <textarea type="text" name="description" class="form-control7" value="{{$service->description}}" >{{$service->description}}</textarea>    
            <div> 

            <p class="role">Quy tắc cấp số</p>

            <input type="checkbox" id="auto" name="auto" value="auto">
            <label class="label-numberIn">Tăng tự động từ: </label>
            <input type="text" name="numberIn" value="0001" class="numberIn"/>
            <p class="p-numberIn"> Đến </p>
            <input type="text" name="numberOut" value="9999" class="numberOut"/>


            <input type="checkbox" id="prefix" name="prefix" value="prefix">
            <label class="label-Prefix">Prefix: </label>
            <input type="text" name="numberIn2" value="0001" class="numberIn2"/>


            <input type="checkbox" id="surfix" name="surfix" value="surfix">
            <label class="label-Surfix">Surfix: </label>
            <input type="text" name="numberIn3" value="0001" class="numberIn3"/>


            <input type="checkbox" id="reset" name="reset" value="reset">
            <label class="label-Reset">Reset mỗi ngày: </label>

            <div>
                <p class="note"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</p>
            </div>

            <div>
                <a href="{{route('service')}}" class="cancel-button" >  <p class="p-cancel">Hủy bỏ</p></a>
         
                <button type="submit" class="continue-button" id="button-login"> <span class="submit-add"> Cập nhật</span></button>
            </div>

        </form>
  </div>

  

@endsection