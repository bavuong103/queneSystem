@extends('master')
@section('content')
<div >
    <p class="title-left" style="width:200px"> Cài đặt hệ thống > </p>
    <p class="title-right2" style="left:180px">Quản lý tài khoản ></p>
    <p class="title-right3" style="left:380px">Thêm tài khoản</p>
  </div>

  <div>
      <h2 class="title">Quản lý tài khoản</h2>
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
        <p class="info-device" style="width:200px">Thông tin tài khoản</p>

            {{-- @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif --}}

        <form action="{{route('editAccount',$account->id)}}" method="POST">
            @csrf

            <div>
                <label class="id-device">Họ tên: <span style="color:red">*</span></label>
                <input type="text" name="fullname" class="form-control1" value={{$account->fullname}} placeholder="Nhập họ tên" />    
            <div>

            <div>
                <label class="name-device">Số điện thoại: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="phone" class="form-control2" value={{$account->phone}} placeholder="Nhập số điện thoại"/>    
            <div>

            <div>
                <label class="ip-device">Email: <span style="color:hsl(0, 100%, 64%);">*</span></label>
                <input type="text" name="email" class="form-control3"  value={{$account->email}} placeholder="Nhập email"/>    
            <div>  

            <div>
                <label class="service">Vai trò <span style="color:#FF4747;">*</span></label>
                <select class="select-action2" name="role" style="left:20px;top:400px;width:300px">
                    @foreach($role as $role)
                        @if($role->id == $account->role)
                            <option value="{{$role->id}}" selected>{{$role->name}}</option>
                        @else
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endif
                                    
                    @endforeach
                </select>   
            <div>

            <div>
                <p class="title-action2" style="width:200px">Tên đăng nhập <span style="color:#FF4747;">*</span></p>
                <input type="text" name="username" class="form-control5" value={{$account->username}} style="left:560px;top:90px" placeholder="Nhập tài khoản"/>  
            </div>

            <div>
                <label class="username">Mật khẩu: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="password" class="form-control5"   placeholder="Nhập tài khoản" readonly/>    
            <div> 

            <div>
                <label class="password" style="width:200px">Nhập lại mật khẩu: <span style="color:#FF4747;">*</span></label>
                <input type="text" name="re-password" class="form-control6" placeholder="Nhập mật khẩu" readonly/>    
            <div>

            <div>
                <p class="note"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</p>
            </div>

            <div>
                <label class="service" style="left:560px;top:370px;width:300px">Trạng thái <span style="color:#FF4747;">*</span></label>
                <select class="select-action2" name="status" style="left:560px;top:400px;width:300px">
                
                        @if($account->status == 1)
                            <option value="0">Tất cả</option>
                            <option value="1" selected>Ngưng hoạt động</option>
                            <option value="2">Hoạt động</option>
                        @else
                            <option value="0">Tất cả</option>
                            <option value="1" >Ngưng hoạt động</option>
                            <option value="2" selected >Hoạt động</option>
                         @endif
                                    
                
                </select>   
            <div>

            <div>
                <a href="{{route('account')}}" class="cancel-button" >  <p class="p-cancel">Hủy bỏ</p></a>
         
                <button type="submit" class="continue-button" id="button-login"> <span class="submit-add"> Cập nhật</span></button>
            </div>

        </form>
  </div>

  

@endsection