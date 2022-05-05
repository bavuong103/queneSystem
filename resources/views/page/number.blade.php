@extends('master')
@section('content')
  <div >
    <p class="title-left"> Cấp số > </p>
    <p class="title-right">Danh sách cấp số</p>
  </div>

  <div>
      <h2 class="title">Danh sách cấp số</h2>
  </div>

  <div>
      <p class="title-action">Tên dịch vụ</p>
      <select class="select-nameService" id="sortAction">
        {{-- <option value="{{Request::url()}}?sort_by=none" {{ $_GET['sort_by']=='none' ? 'selected' : '' }}>Tất cả</option>
        <option value="{{Request::url()}}?sort_by=action" {{  $_GET['sort_by']=='action' ? 'selected' : ''}} >Hoạt động</option>
        <option value="{{Request::url()}}?sort_by=no-action" {{ $_GET['sort_by']=='no-action' ? 'selected' :  '' }}>Ngưng hoạt động</option> --}}
        <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
        <option value="{{Request::url()}}?sort_by=action"  >Hoạt động</option>
        <option value="{{Request::url()}}?sort_by=no-action" >Ngưng hoạt động</option>
      </select>
  </div>

  <div>
    <p class="title-action4">Tình trạng</p>
    <select class="select-Status" id="sortAction">
      {{-- <option value="{{Request::url()}}?sort_by=none" {{ $_GET['sort_by']=='none' ? 'selected' : '' }}>Tất cả</option>
      <option value="{{Request::url()}}?sort_by=action" {{  $_GET['sort_by']=='action' ? 'selected' : ''}} >Hoạt động</option>
      <option value="{{Request::url()}}?sort_by=no-action" {{ $_GET['sort_by']=='no-action' ? 'selected' :  '' }}>Ngưng hoạt động</option> --}}
      <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
      <option value="{{Request::url()}}?sort_by=action"  >Hoạt động</option>
      <option value="{{Request::url()}}?sort_by=no-action" >Ngưng hoạt động</option>
    </select>
</div>

<div>
    <p class="title-action5">Nguồn cấp</p>
    <select class="select-original" id="sortAction">
      {{-- <option value="{{Request::url()}}?sort_by=none" {{ $_GET['sort_by']=='none' ? 'selected' : '' }}>Tất cả</option>
      <option value="{{Request::url()}}?sort_by=action" {{  $_GET['sort_by']=='action' ? 'selected' : ''}} >Hoạt động</option>
      <option value="{{Request::url()}}?sort_by=no-action" {{ $_GET['sort_by']=='no-action' ? 'selected' :  '' }}>Ngưng hoạt động</option> --}}
      <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
      <option value="{{Request::url()}}?sort_by=action"  >Hoạt động</option>
      <option value="{{Request::url()}}?sort_by=no-action" >Ngưng hoạt động</option>
    </select>
</div>

  <div>
    <form action="{{route('searchTime')}}" method="GET">
      <p class="title-connect2">Chọn thời gian</p>
      <input class="inputTimeIn3" type="date" name="timeIn" value="" />
      <img src="admin/assets/images/tg.png" alt="right" class="tg3">
      <input class="inputTimeOut3" type="date" name="timeOut" value="" />
      <button type="submit" class="button-time3"><i class="fas fa-search"></i></button>
    </form>
  </div>

  <div>
      <form action="{{route('searchService')}}" method="GET">
          <p class="title-search">Từ khóa</p>
          <input class="inputSearch" type="text" name="search" value="" placeholder="Nhập từ khóa" />
          <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
      </form>
  </div>

  <div>
    <a href="{{route('addNumber')}}"><img src="admin/assets/images/add_number.png" alt="right" class="add-button"></a>
  </div>

         @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif

          <div>
            <table class="table">
                <thead>
                    <tr class="">
                        <th class="table-title"><p class="style-title">STT</p></th>
                        <th class="table-title2"><p class="style-title">Tên khách hàng</p></th>
                        <th class="table-title2"><p class="style-title">Tên dịch vụ</p></th>
                        <th class="table-title"><p class="style-title">Thời gian cấp</p></th>
                        <th class="table-title"><p class="style-title">Hạn sử dụng</p></th>
                        <th class="table-title"><p class="style-title">Trạng thái</p></th>
                        <th class="table-title"><p class="style-title">Nguồn cấp</p></th>
                        <th class="table-title"></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($number as $number)
                    <tr>
                        <td class="table-row">{{$number->id}}</td>
                        <td class="table-row">{{$number->fullname}}</td>
                        <td class="table-row">
                          <?php
                          if($number->service==1)
                          {
                            echo "Khám tim mạch";
                          }else if($number->service==2){
                            echo "Khám sản - Phụ khoa";
                          }else if($number->service==3){
                            echo "Khám răng hàm mặt";
                          }else if($number->service==4){
                            echo "Khám tai mũi họng";
                          }
                        ?>
                        </td>
                        <td class="table-row">{{$number->created_at}}</td>
                        <td class="table-row">{{$number->dateUsed}}</td>
                        <td class="table-row"> <?php
                          if($number->status==1)
                          {
                            echo "Đang chờ";
                          }else if($number->status==2){
                            echo "Đã sử dụng";
                          }else if($number->status==3){
                            echo "Bỏ qua";
                          }
                        ?></td>
                        <td class="table-row">{{$number->original}}</td>
                        <td class="table-row"><a href="{{route('detailsNumber')}}">Chi tiết</a></td>
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