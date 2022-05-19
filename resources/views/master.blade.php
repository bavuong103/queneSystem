<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>Service</title>
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
          <li><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li><a href="{{route('device')}}">Thiết bị</a></li>
          <li><a href="{{route('service')}}">Dịch vụ</a></li>
          <li><a href="{{route('number')}}">Cấp số</a></li>
          <li><a href="{{route('report')}}">Báo cáo</a></li>
          <li><a href="{{route('role')}}">Cài đặt hệ thống</a></li>
          <li><a href="{{route('account')}}">Quản lý tài khoản</a></li>
        </ul>  
    </div>

    <a href="{{route('logout')}}" class="logout-button" > Đăng xuất </a>
     
 </div>

 <div class="right">
     

     @yield('content')


    
     <script src="admin/dist/js/jquery-3.3.1.min.js"></script>

     {{-- sort --}}
      <script type="text/javascript">
        $(document).ready(function($) { 
        //alert("hello");
        

        $('#sortAction').on('change',function(){
          var url = $(this).val();
          //alert(url);

          if(url)
          {
            window.location = url;
          }
          return false;
        });
      });

      </script>

    <script type="text/javascript">
      $(document).ready(function($) { 
      //alert("hello");
      

      $('#sortConnect').on('change',function(){
        var url = $(this).val();
        //alert(url);

        if(url)
        {
          window.location = url;
        }
        return false;
      });
    });

    </script>

  <script type="text/javascript">
    $(document).ready(function($) { 
    //alert("hello");
    

    $('#sortService').on('change',function(){
      var url = $(this).val();
      //alert(url);

      if(url)
      {
        window.location = url;
      }
      return false;
    });
  });

  </script>

  <script type="text/javascript">
    $(document).ready(function($) { 
    //alert("hello");
    

    $('#sortStatus').on('change',function(){
      var url = $(this).val();
      //alert(url);

      if(url)
      {
        window.location = url;
      }
      return false;
    });
  });

  </script>


  <script type="text/javascript">
    $(document).ready(function($) { 
    //alert("hello");
    

    $('#sortOriginal').on('change',function(){
      var url = $(this).val();
      //alert(url);

      if(url)
      {
        window.location = url;
      }
      return false;
    });
  });

  </script>

<script type="text/javascript">
  $(document).ready(function($) { 
  //alert("hello");
  

  $('#sortRole').on('change',function(){
    var url = $(this).val();
    //alert(url);

    if(url)
    {
      window.location = url;
    }
    return false;
  });
});

</script>

     

 </div>

</body>



</html>