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
     <form action="{{route('confirmpassword')}}" method="post" class="form">
         @csrf
         <input name="email" hidden value="{{ $checkEmail->email }}">
         
         <h3 class="tittle-changepasword">Đặt lại mật khẩu mới</h3>
         <label for="newPass" class="inputBoxPass">Mật khẩu</label><br>
         <input type="password" name="newPass" id="newPass" class="form-control-pass"><br>
         <label for="second" class="inputBoxPass2">Nhập lại mật khẩu mới</label><br>
         <input type="password" name="second"  class="form-control-pass2" ><br>

          @if(isset($mes))
            <div class="update-success">{{$mes}}</div>
         @endif

         <button type="submit" class="submit-password" id="button-login"> <span class="submit-login">Xác nhận</span></button>
         
         
     </form>
 </div>
 <div class="right-login">
     <img src="admin/assets/images/hinh2.png" alt="right" class="image-right">
     
 </div>

</body>