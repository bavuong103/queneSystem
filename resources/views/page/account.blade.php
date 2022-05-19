@extends('master')
@section('content')
  <div >
    <p class="title-left" style="width:200px"> Cài đặt hệ thống > </p>
    <p class="title-right" style="left:200px">Quản lý tài khoản</p>
  </div>

  <div>
      <h2 class="title">Danh sách tài khoản</h2>
  </div>

  <div>
    <p class="title-action">Tên vai trò</p>
    <select class="select-action" id="sortRole">
      {{-- <option value="{{Request::url()}}?sort_by=none" {{ $_GET['sort_by']=='none' ? 'selected' : '' }}>Tất cả</option>
      <option value="{{Request::url()}}?sort_by=action" {{  $_GET['sort_by']=='action' ? 'selected' : ''}} >Hoạt động</option>
      <option value="{{Request::url()}}?sort_by=no-action" {{ $_GET['sort_by']=='no-action' ? 'selected' :  '' }}>Ngưng hoạt động</option> --}}
      <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
      <option value="{{Request::url()}}?sort_by=ketoan"  >Kế toán</option>
      <option value="{{Request::url()}}?sort_by=bacsi" >Bác sĩ</option>
      <option value="{{Request::url()}}?sort_by=letan" >Lễ tân</option>
    </select>
</div>

  <div>
      <form action="{{route('searchAccount')}}" method="GET">
          <p class="title-search">Từ khóa</p>
          <input class="inputSearch" type="text" name="search" value="" placeholder="Nhập từ khóa" />
          <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
      </form>
  </div>

  <div>
    <a href="{{route('addAccount')}}"><img src="admin/assets/images/addservice.png" alt="right" class="add-button" style="left:1470px"></a>
  </div>

         {{-- @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif --}}

  <div>
      <table class="table">
          <thead>
              <tr class="">
                  <th class="table-title2" style="width:200px"><p class="style-title">Tên đăng nhập</p></th>
                  <th class="table-title2" style="width:200px"><p class="style-title">Họ tên</p></th>
                  <th class="table-title2" style="width:200px"><p class="style-title">Số điện thoại</p></th>
                  <th class="table-title2" style="width:200px"><p class="style-title">Email</p></th>
                  <th class="table-title2" style="width:200px"><p class="style-title">Vai trò</p></th>
                  <th class="table-title2" style="width:200px"><p class="style-title">Trạng thái hoạt động</p></th>
                  <th class="table-title2" style="width:100px"></th>
              </tr>
          </thead>
          <tbody>
            @foreach ($account as $account)
            <tr>
                <td class="table-row">{{$account->username}}</td>
             
                <td class="table-row">
                  {{$account->fullname}}
                </td>
                <td class="table-row">{{$account->phone}}</td>
                <td class="table-row">{{$account->email}}</td>
                <td class="table-row">{{$account->role}}</td>
                <td class="table-row">
                  <?php
                    if($account->status==1)
                    {
                      echo "Ngưng hoạt động";
                    }else if($account->status==2){
                      echo "Hoạt động";
                    }
                  ?>
                </td>
                <td class="table-row"><a href="{{route('editRole',$account->id)}}">Cập nhật</a></td>
               
            </tr>
          @endforeach
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