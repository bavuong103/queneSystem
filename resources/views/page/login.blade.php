<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>Login</title>

    
    <!-- Custom CSS -->
    <link href="admin/dist/css/styleLogin.css" rel="stylesheet" />
    
  </head>

<body>

<div class="left-login">
    
    <img src="admin/assets/images/AltaLogo.png" alt="logo" class="logo">
     <form action="{{route('login')}}" method="post" class="form">
         @csrf
         <label for="username" class="inputBox">Tên đăng nhập *</label><br>
         <input type="text" name="username" id="username" class="form-control"><br>
         <label for="password" class="inputBox">Mật Khẩu *</label><br>
         <input type="password" name="password"  class="form-control" ><br>

        

         <button type="submit" class="submit" id="button-login"> <span class="submit-login"> Đăng Nhập</span></button>
         
         @if(!Session::has('error-login'))
           <a href="{{route('changepassword')}}" class="forgetpassword" >  Quên mật khẩu?</a></div>
         @endif

         @if(Session::has('error-login'))
           <a href="{{route('changepassword')}}" class="error-forgetpassword" >  Quên mật khẩu?</a></div>
         @endif
         
     </form>
 </div>

 <div class="right-login">
     <img src="admin/assets/images/hinh1.png" alt="right" class="image-right">
     <p class="system-title">Hệ Thống</div>
     <span class="system-name">Quản Lý Xếp Hàng</span>
 </div>

</body>