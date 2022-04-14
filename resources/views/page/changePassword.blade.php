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
     <form action="{{route('checkemail')}}" method="post" class="form">
         @csrf
         <h3 class="tittle-changepasword">Đặt lại mật khẩu</h3>
         <label for="email" class="inputBoxEmail">Vui lòng nhập lại email để đặt lại mật khẩu của bạn *</label><br>
         <input type="text" name="email" class="email" class="form-control"><br>
         @if(Session::has('error-changepassword'))
            <div class="error-login">{{Session::get('error-changepassword');}}</div>
          @endif
         
           <a href="{{route('login')}}" class="cancel-button" >  Hủy</a>
         
           <button type="submit" class="continue-button" id="button-login"> <span class="submit-login"> Tiếp tục</span></button>
           {{-- <a href="{{route('confirmpassword')}}" class="continue-button" >  Tiếp tục</a> --}}
        
         
     </form>
 </div>
 <div class="right-login">
     <img src="admin/assets/images/hinh2.png" alt="right" class="image-right">
     
 </div>

</body>