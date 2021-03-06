@extends('master')
@section('content')
  <div >
    <p class="title-left"> Báo cáo > </p>
    <p class="title-right">Lập báo cáo</p>
  </div>

  <div>
    <form action="{{route('searchTimeReport')}}" method="GET">
      <p class="title-connect2" style="top:100px; left:30px">Chọn thời gian</p>
      <input class="inputTimeIn3" type="date" name="timeIn" value="" style="top:150px; left:30px" />
      <img src="admin/assets/images/tg.png" alt="right" class="tg3" style="top:165px; left:190px">
      <input class="inputTimeOut3" type="date" name="timeOut" value="" style="top:150px; left:230px" />
      <button type="submit" class="button-time3" style="top:150px; left:390px"><i class="fas fa-search"></i></button>
    </form>
  </div>


  <div>
    <a href="{{route('printReport')}}"><img src="admin/assets/images/print.png" alt="right" class="add-button" style="left:1150px; top:220px"></a>
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
            @foreach ($report as $report)
                    <tr>
                        <td class="table-row">{{$report->id}}</td>
                     
                        <td class="table-row">
                          <?php
                          if($report->service==1)
                          {
                            echo "Khám tim mạch";
                          }else if($report->service==2){
                            echo "Khám sản - Phụ khoa";
                          }else if($report->service==3){
                            echo "Khám răng hàm mặt";
                          }else if($report->service==4){
                            echo "Khám tai mũi họng";
                          }
                        ?>
                        </td>
                        <td class="table-row">{{$report->created_at}}</td>
                        
                        <td class="table-row"> 
                          <?php
                          if($report->status==1)
                          {
                            echo "Đang chờ";
                          }else if($report->status==2){
                            echo "Đã sử dụng";
                          }else if($report->status==3){
                            echo "Bỏ qua";
                          }
                        ?>
                        </td>
                        <td class="table-row">{{$report->original}}</td>
                       
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