@extends('master')
@section('content')
  <div >
    <p class="title-left"> Dịch vụ > </p>
    <p class="title-right">Danh sách dịch vụ</p>
  </div>

  <div>
      <h2 class="title">Danh sách thiết bị</h2>
  </div>

  <div>
      <p class="title-action">Trạng thái hoạt động</p>
      <select class="select-action" id="sortAction">
        {{-- <option value="{{Request::url()}}?sort_by=none" {{ $_GET['sort_by']=='none' ? 'selected' : '' }}>Tất cả</option>
        <option value="{{Request::url()}}?sort_by=action" {{  $_GET['sort_by']=='action' ? 'selected' : ''}} >Hoạt động</option>
        <option value="{{Request::url()}}?sort_by=no-action" {{ $_GET['sort_by']=='no-action' ? 'selected' :  '' }}>Ngưng hoạt động</option> --}}
        <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
        <option value="{{Request::url()}}?sort_by=action"  >Hoạt động</option>
        <option value="{{Request::url()}}?sort_by=no-action" >Ngưng hoạt động</option>
      </select>
  </div>

  <div>
    <p class="title-connect">Chọn thời gian</p>
    <input class="inputTimeIn" type="date" name="timeIn" value="" />
    <img src="admin/assets/images/tg.png" alt="right" class="tg">
    <input class="inputTimeOut" type="date" name="timeOut" value="" />
  </div>

  <div>
      <form action="{{route('searchService')}}" method="GET">
          <p class="title-search">Từ khóa</p>
          <input class="inputSearch" type="text" name="search" value="" placeholder="Nhập từ khóa" />
          <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
      </form>
  </div>

  <div>
    <a href="{{route('addService')}}"><img src="admin/assets/images/addservice.png" alt="right" class="add-button"></a>
  </div>

         @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif

  <div>
      <table class="table">
          <thead>
              <tr class="">
                  <th class="table-title2"><p class="style-title">Mã dịch vụ</p></th>
                  <th class="table-title2"><p class="style-title">Tên dịch vụ</p></th>
                  <th class="table-title2"><p class="style-title">Mô tả</p></th>
                  <th class="table-title2"><p class="style-title">Trạng thái hoạt động</p></th>
                  
                  <th class="table-title2"></th>
                  <th class="table-title2"></th>
              </tr>
          </thead>
          <tbody>
            @foreach ($service as $service)
              <tr>
                  <td class="table-row">{{$service->id}}</td>
                  <td class="table-row">{{$service->name}}</td>
                  <td class="table-row">{{$service->description}}</td>
                  <td class="table-row">
                    <?php
                    if($service->status==0)
                    {
                      echo "<i class='fas fa-circle' style='color:red'></i>"."Ngưng hoạt động";
                    }else{
                      echo "<i class='fas fa-circle' style='color:green'></i>". "Hoạt động";
                    }
                  ?>
                  </td>
                  <td class="table-row"><a href="{{route('detailsService',$service->id)}}">Chi tiết</a></td>
                  <td class="table-row"><a href="{{route('editService',$service->id)}}">Cập nhật</a></td>
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