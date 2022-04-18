@extends('master')
@section('content')
  <div >
    <p class="title-left"> Thiết bị > </p>
    <p class="title-right">Danh sách thiết bị</p>
  </div>

  <div>
      <h2 class="title">Danh sách thiết bị</h2>
  </div>

  <div>
      <p class="title-action">Trạng thái hoạt động</p>
      <select class="select-action">
        <option>Tất cả</option>
        <option>Hoạt động</option>
        <option>Ngưng hoạt động</option>
      </select>
  </div>

  <div>
    <p class="title-connect">Trạng thái kết nối</p>
    <select class="select-connect">
      <option>Tất cả</option>
      <option>Két nối</option>
      <option>Mất kết nối</option>
    </select>
  </div>

  <div>
      <form action="#" method="GET">
          <p class="title-search">Từ khóa</p>
          <input class="inputSearch" type="text" name="search" value="" placeholder="Nhập từ khóa" />
          <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
      </form>
  </div>

  <div>
      <table>
          <thead>
            
          </thead>
          <tbody>
            
          </tbody>
      </table>
  </div>

  <div>
    <img src="admin/assets/images/chuong.png" alt="right" class="chuong">
  </div>
  <div>
    <img src="admin/assets/images/avatar-mini.png" alt="right" class="mini">
  </div>
  <div>
    <p class="hello">Xin Chào</p>
  </div>
  <div>
    <h2 class="name-hello">{{Auth::user()->fullname}}</h2>
  </div>

  @endsection