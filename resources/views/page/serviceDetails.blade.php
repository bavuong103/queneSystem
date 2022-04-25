@extends('master')
@section('content')
<div >
    <p class="title-left"> Dịch vụ > </p>
    <p class="title-right2">Danh sách dịch vụ ></p>
    <p class="title-right3">Thêm dịch vụ</p>
  </div>

  <div>
      <h2 class="title">Quản lý dịch vụ</h2>
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

  <div>
    <a href="{{route('editService',$service->id)}}"><img src="admin/assets/images/update_service.png" alt="right" class="edit-button"></a>
    <a href="{{route('service')}}"><img src="admin/assets/images/back.png" alt="right" class="back-button"></a>
</div>

  <div class="main">
        <p class="info-device">Thông tin dịch vụ</p>

            {{-- @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif --}}

        <form action="#" method="POST">
            @csrf

            <div>
                <label class="id-device">Mã dịch vụ: </label>
                <p class="content-ID">{{$service->id}}</p>
            <div>

            <div>
                <label class="name-device2">Tên dịch vụ: </label>
                <p class="content-Name">{{$service->name}}</p>
            <div>

            

            <div>
                <label class="title-action3">Mô tả:</label>
                <p class="content-Des">{{$service->description}}</p>
            <div> 

            <p class="role2">Quy tắc cấp số</p>

            <label class="label-numberIn2">Tăng tự động: </label>
            <input type="text" name="numberIn" value="0001" class="numberIn4"/>
            <p class="p-numberIn2"> đến </p>
            <input type="text" name="numberOut" value="9999" class="numberOut2"/>


            <label class="label-Prefix2">Prefix: </label>
            <input type="text" name="numberIn2" value="0001" class="numberIn5"/>


            <label class="label-Surfix2">Surfix: </label>
            <input type="text" name="numberIn3" value="0001" class="numberIn6"/>


            <label class="label-Reset2">Reset mỗi ngày: </label>
            <p class="p-reset"> adjadka </p>

           <div>
                <label class="status-service">Trạng thái</label>
                <select class="select-action2" id="sortAction">
                    <option value="{{Request::url()}}?sort_by=none" >Tất cả</option>
                    <option value="{{Request::url()}}?sort_by=action"  >Đã hoàn thành</option>
                    <option value="{{Request::url()}}?sort_by=no-action" >Đã thực hiện</option>
                    <option value="{{Request::url()}}?sort_by=no-action" >Vắng</option>
                </select>


                <label class="time-service">Chọn thời gian</label>
                <input class="inputTimeIn2" type="date" name="timeIn" value="" />
                <img src="admin/assets/images/tg.png" alt="right" class="tg2">
                <input class="inputTimeOut2" type="date" name="timeOut" value="" />


                <form action="{{route('searchDevice')}}" method="GET">
                    <p class="search-service">Từ khóa</p>
                    <input class="inputSearch2" type="text" name="search" value="" placeholder="Nhập từ khóa" />
                    <button type="submit" class="button-search2"><i class="fas fa-search"></i></button>
                </form>
          
            </div>

            <div>
                <table class="table">
                    <thead>
                        <tr class="">
                            <th class="table-title3"><p class="style-title">Số thứ tự</p></th>
                            <th class="table-title4"><p class="style-title">Trạng thái</p></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <td class="table-row2">sf</td>
                          <td class="table-row3">f</td>
                          
                        </tr>
                      
                    </tbody>
                </table>
          
                {{-- <a href=""><img src="admin/assets/images/previous-button.png" alt="right" class="previous-button"></a>
                <a href="" class="button-page1">1</a>
                <a href="" class="button-page2">2</a>
                <a href="" class="button-page3">3</a>
                <a href="" class="button-page4">4</a>
                <a href="" class="button-pagevvv">...</a>
                <a href="" class="button-page10">10</a>
                <a href=""><img src="admin/assets/images/next-button.png" alt="right" class="next-button"></a> --}}
            </div>

          

            
        </form>
  </div>

  

@endsection