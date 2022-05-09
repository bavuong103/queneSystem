@extends('master')
@section('content')
  <div >
    <p class="title-left"> Báo cáo > </p>
    <p class="title-right">Lập báo cáo</p>
  </div>


  <div>
    <a href="{{route('addDevice')}}"><img src="admin/assets/images/add.png" alt="right" class="add-button"></a>
  </div>

         {{-- @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif --}}

  <div>
      <table class="table" style="top:220px">
          <thead>
              <tr class="">
                  <th class="table-title2"><p class="style-title">Số thứ tự</p></th>
                  <th class="table-title2"><p class="style-title">Tên dịch vụ</p></th>
                  <th class="table-title2"><p class="style-title">Thời gian cấp</p></th>
                  <th class="table-title2"><p class="style-title">Tình trạng</p></th>
                  <th class="table-title2"><p class="style-title">Nguồn cấp</p></th>
                  
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