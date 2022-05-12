@extends('master')
@section('content')
  

<div class="action-buttons" id="printPageButton">
    <a class="btn bg-white btn-light mx-1px text-95" href="#" onclick="window.print()">
        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
        In pdf
    </a>
</div>

  <div>
      <table class="table" style="top:50px">
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

      

  @endsection