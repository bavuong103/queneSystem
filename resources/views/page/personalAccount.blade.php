<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>Account</title>

    
    <!-- Custom CSS -->
    <link href="admin/dist/css/styleMenu.css" rel="stylesheet" />
    
  </head>

<body>

<div class="left-menu">
      
      
    <img src="admin/assets/images/AltaLogo.png" alt="logo" class="logo-menu">

    <div id="menu"> <!--Start the unordered list after the opening menu division -->
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Thiết bị</a></li>
          <li><a href="#">Dịch vụ</a></li>
          <li><a href="#">Cấp số</a></li>
          <li><a href="#">Báo cáo</a></li>
          <li><a href="#">Cài đặt hệ thống</a></li>
        </ul>  
    </div>

    <a href="{{route('login')}}" class="logout-button" > Đăng xuất </a>
     
 </div>

 <div class="right">
     {{-- <img src="admin/assets/images/hinh2.png" alt="right" class="image-right"> --}}
    
     <div class="info">
        ABC
    </div>

 </div>

</body>