<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>Login</title>

    
    <!-- Custom CSS -->
    <link href="admin/dist/css/styleLogin.css" rel="stylesheet" />
    
  </head>

<body>

<div class="login">
    <img src="admin/assets/images/AltaLogo.png" alt="logo" class="logo">
     <form action="{{route('login')}}" method="post" class="form">
         @csrf
         <label for="username" class="inputBox">Tên đăng nhập *</label><br>
         <input type="text" name="username" id="username" class="form-control"><br>
         <label for="password" class="inputBox">Mật Khẩu *</label><br>
         <input type="password" name="password"  class="form-control" ><br>
     
         <button type="submit" class="submit" id="button-login"> <span> Đăng Nhập</span></button>
         
         <a href="#" id="forgetpassword-error" >  Quên mật khẩu?</a></div>
     </form>
 </div>
 <div class="title">
     <img src="admin/assets/images/hinh1.png" alt="background" class="background">
     <p class="system-title">Hệ Thống</div>
     <span class="system-name">Quản Lý Xếp Hàng</span>
 </div>

</body>