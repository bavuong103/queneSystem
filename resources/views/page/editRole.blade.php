@extends('master')
@section('content')
<div >
    <p class="title-left" style="width:200px"> Cài đặt hệ thống > </p>
    <p class="title-right2" style="width:200px; left:180px">Quản lý vai trò ></p>
    <p class="title-right3" style="width:200px; left:330px">Sửa vai trò</p>
  </div>

  <div>
      <h2 class="title">Danh sách vai trò</h2>
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
        <p class="info-device">Thông tin vai trò</p>

            {{-- @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif --}}

        <form action="{{route('editRole',$role->id)}}" method="POST">
            @csrf

            <div>
                <label class="id-device">Tên vai trò: <span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control1" value="{{$role->name}}" placeholder="Nhập tên vai trò"/>    
            <div>

            <div>
                <label class="name-device">Mô tả: <span style="color:#FF4747;">*</span></label>
                <textarea type="text" name="description" class="form-control7" value="{{$role->description}}" style="left:20px; top:200px; width:400px" placeholder="Nhập Mô tả">{{$role->description}} </textarea>  
            <div>

           

            <div>
                <p class="title-action2" style="width:200px">Phân quyền chức năng <span style="color:#FF4747">*</span></p>
                
            </div>

            <div class="backgound-ogane">
                <label class="function1">Nhóm chức năng A</label>
                <input type="checkbox" id="allA" name="allA" value="allA" >
                <p class="allAp">Tất cả</p>
                <input type="checkbox" id="xA" name="xA" value="xA" >
                <p class="xAp">Chức năng x</p>
                <input type="checkbox" id="yA" name="yA" value="yA" >
                <p class="yAp">Chức năng y</p>
                <input type="checkbox" id="zA" name="zA" value="zA" >
                <p class="zAp">Chức năng z</p>
                
                <label class="function2">Nhóm chức năng B</label>
                <input type="checkbox" id="allB" name="allB" value="allB" >
                <p class="allBp">Tất cả</p>
                <input type="checkbox" id="xB" name="xB" value="xB" >
                <p class="xBp">Chức năng x</p>
                <input type="checkbox" id="yB" name="yB" value="yB" >
                <p class="yBp">Chức năng y</p>
                <input type="checkbox" id="zB" name="zB" value="zB" >
                <p class="zBp">Chức năng z</p>
            <div> 

            

            <div>
                <p class="note" ><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</p>
            </div>

            <div>
                <a href="{{route('device')}}" class="cancel-button" >  <p class="p-cancel">Hủy bỏ</p></a>
         
                <button type="submit" class="continue-button" id="button-login"> <span class="submit-add"> Cập nhật</span></button>
            </div>

        </form>
  </div>

  

@endsection