@extends('master')
@section('content')

    <div ><p class="title-info">Thông tin cá nhân</p></div>

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

     <div class="info">
       
        <img src="admin/assets/images/avatar.png" alt="right" class="image-avatar">
        <div ><p class="name-info">Dương Quang Huy</p></div>
        <div ><label class="name">Tên người dùng</label>
          <input type="text" name="name" class="form-control-name" value="{{Auth::user()->fullname}}" readonly><br>
        </div>
        
        <div ><label class="phone">Số điện thoại</label>
          <input type="text" name="phone" class="form-control-phone" value="{{Auth::user()->phone}}"  readonly><br>
        </div>
        <div ><label class="email">Email:</label>
          <input type="text" name="email" class="form-control-email" value="{{Auth::user()->email}}" readonly><br>
        </div>
        <div ><label class="username">Tên đăng nhập</label>
          <input type="text" name="username" class="form-control-username" value="{{Auth::user()->username}}"readonly><br>
        </div>
        <div ><label class="password">Mật khẩu</label>
          <input type="text" name="password" class="form-control-password" value="{{Auth::user()->password}}" readonly><br>
        </div>
        <div ><label class="role">Vai trò</label>
          <input type="text" name="role" class="form-control-role" value="{{Auth::user()->role}}" readonly><br>
        </div>
    </div>

 @endsection