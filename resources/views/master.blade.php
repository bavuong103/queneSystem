<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>Account</title>
    <base href="{{asset('')}}">
    
    <!-- Custom CSS -->
    <link href="admin/dist/css/styleMenu.css" rel="stylesheet" />


    <!-- Custom SCripts -->
    <script src="https://kit.fontawesome.com/6e598d00ac.js" crossorigin="anonymous"></script>

    
  </head>

<body>

<div class="left-menu">
      
      
    <img src="admin/assets/images/AltaLogo.png" alt="logo" class="logo-menu">

    <div id="menu"> <!--Start the unordered list after the opening menu division -->
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="{{route('device')}}">Thiết bị</a></li>
          <li><a href="#">Dịch vụ</a></li>
          <li><a href="#">Cấp số</a></li>
          <li><a href="#">Báo cáo</a></li>
          <li><a href="#">Cài đặt hệ thống</a></li>
        </ul>  
    </div>

    <a href="{{route('logout')}}" class="logout-button" > Đăng xuất </a>
     
 </div>

 <div class="right">
     

     @yield('content')
    
    

     

 </div>

</body>