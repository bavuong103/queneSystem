@extends('master')
@section('content')
  <div >
    <p class="title-left"> Cài đặt hệ thống > </p>
    <p class="title-right">Quản lý vai trò</p>
  </div>

  <div>
      <h2 class="title">Danh sách vai trò</h2>
  </div>

  

  <div>
      <form action="{{route('searchService')}}" method="GET">
          <p class="title-search">Từ khóa</p>
          <input class="inputSearch" type="text" name="search" value="" placeholder="Nhập từ khóa" />
          <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
      </form>
  </div>

  <div>
    <a href="{{route('addRole')}}"><img src="admin/assets/images/addservice.png" alt="right" class="add-button"></a>
  </div>

         {{-- @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif --}}

  <div>
      <table class="table">
          <thead>
              <tr class="">
                  <th class="table-title2" style="width:300px"><p class="style-title">Tên vai trò</p></th>
                  <th class="table-title2" style="width:300px"><p class="style-title">Số người dùng</p></th>
                  <th class="table-title2" style="width:400px"><p class="style-title">Mô tả</p></th>
                  <th class="table-title2" style="width:250px"></th>
              </tr>
          </thead>
          <tbody>
           
          </tbody>
      </table>

      <a href=""><img src="admin/assets/images/previous-button.png" alt="right" class="previous-button"></a>
      <a href="" class="button-page1">1</a>
      <a href="" class="button-page2">2</a>
      <a href="" class="button-page3">3</a>
      <a href="" class="button-page4">4</a>
      <a href="" class="button-pagevvv">...</a>
      <a href="" class="button-page10">10</a>
      <a href=""><img src="admin/assets/images/next-button.png" alt="right" class="next-button"></a>
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

  @endsection