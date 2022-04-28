@extends('master')
@section('content')

<div>
  <div >
    <p class="title-right4">Dashboard</p>
  </div>

  <div>
      <h2 class="title">Biểu đồ cấp số</h2>
  </div>

    <div class="tiny-chart">
        <div class="icon water"><i class="far fa-calendar"></i></div>
        <p class="tiny-chart-title">Số thứ tự đã cấp</p>
        <p class="tiny-chart-content">0</p>
        <div class="tiny-chart-growth">
        <i class="fas fa-arrow-up"></i>
        <p> 32,45%</p>
        </div>
    </div>

    <div class="tiny-chart2">
        <div class="icon2 jungle"><i class="far fa-calendar-check"></i></div>
        <p class="tiny-chart-title2">Số thứ tự đã sử dụng</p>
        <p class="tiny-chart-content2">0</p>
        <div class="tiny-chart-growth2 ">
            <i class="fas fa-arrow-down"></i>
            <p> 32,45%</p>
        </div>
    </div>

    <div class="tiny-chart3">
        <div class="icon3 orange"><i class="material-icons">&#xe637;</i></div>
        <p class="tiny-chart-title3">Số thứ tự đang chờ</p>
        <p class="tiny-chart-content3">0</p>
        <div class="tiny-chart-growth3">
            <i class="fas fa-arrow-up"></i> <p> 32,45%</p>
        </div>
    </div>

    <div class="tiny-chart4">
        <div class="icon4 fire"><i class="far fa-bookmark"></i></div>
        <p class="tiny-chart-title4">Số thứ tự đã bỏ qua</p>
        <p class="tiny-chart-content4">0</p>
        <div class="tiny-chart-growth4 ">
            <i class="fas fa-arrow-down"></i> <p> 32,45%</p>
        </div>
    </div>


    <div class="big-chart">
        <p class="big-chart-title">Bảng thống kê theo ngày</p>
        <p class="big-chart-date">Tháng 4/2022</p>
        <div class="big-chart-box">
         <p class="big-chart-content">Xem theo</p>
         <select class="report-chart-with" name="reportwith" id="" onchange="">
             <option value="Ngày">Ngày</option>
             <option value="Tháng">Tháng</option>
             <option value="Năm">Năm</option>
         </select>
        </div>
      <div class="chart">
         <canvas id="myChart" width="400" height="135"></canvas>
      </div>
    </div>
</div>

    <div class="nav-right">
      <p class="nav-right-title">Tổng quan</p>
      <div class="nav-right-card">
          <div class="nav-right-card-chart">
              <p class="nav-right-card-chart-percent">90%</p>
              <p class="nav-right-card-items">24000</p>
              <div class="nav-right-card-content">
                  <i class="material-icons">desktop_windows</i> 
                  <p class="padding-left25">Thiết bị</p>
              </div>    
          </div>
          <div class="nav-right-card-items-2">
              <div class="nav-right-card-items-2-item">
              <div class="padding-top5">
                  <i class="dot dot-yellow"></i>
              </div>
              <p class="padding-left10">Đang hoạt động</p>
              <span class="orange">455</span>
              </div>
              <div class="nav-right-card-items-2-item">
                  <div class="padding-top5">
                      <i class="dot"></i>
                  </div>
                  <p class="padding-left10">Ngưng hoạt động</p>
                  <span class="orange">50</span>
                  </div>
          </div>
          </div><br>
          <div class="nav-right-card">
              <div class="nav-right-card-chart bg-water">
                  <p class="nav-right-card-chart-percent">90%</p>
                  <p class="nav-right-card-items">24000</p>
                  <div class="nav-right-card-content water">
                      <i class="material-icons">question_answer</i>
                      <p class="padding-left25">Dịch vụ</p>
                  </div>    
              </div>
              <div class="nav-right-card-items-2">
                  <div class="nav-right-card-items-2-item">
                  <div class="padding-top5">
                      <i class="dot dot-water"></i>
                  </div>
                  <p class="padding-left10">Đang hoạt động</p>
                  <span class="water">455</span>
                  </div>
                  <div class="nav-right-card-items-2-item">
                      <div class="padding-top5">
                          <i class="dot"></i>
                      </div>
                      <p class="padding-left10">Ngưng hoạt động</p>
                      <span class="water">50</span>
                      </div>
              </div>
              </div><br>
              <div class="nav-right-card">
                  <div class="nav-right-card-chart bg-jungle">
                      <p class="nav-right-card-chart-percent">90%</p>
                      <p class="nav-right-card-items">24000</p>
                      <div class="nav-right-card-content jungle">
                          <i class="fas fa-layer-group"></i>
                          <p class="padding-left25">Cấp số</p>
                      </div>    
                  </div>
                  <div class="nav-right-card-items-2">
                      <div class="nav-right-card-items-2-item">
                          <div class="padding-top5">
                          <i class="dot dot-jungle"></i>
                          </div>
                          <p class="padding-left10">Đang chờ</p>
                          <span class="jungle">455</span>
                      </div>
                      <div class="nav-right-card-items-2-item">
                          <div class="padding-top5">
                          <i class="dot"></i>
                          </div>
                          <p class="padding-left10">Đã sử dụng</p>
                          <span class="jungle">50</span>
                      </div>
                      <div class="nav-right-card-items-2-item">
                          <div class="padding-top5 ">
                          <i class="dot dot-fire"></i>
                          </div>
                          <p class="padding-left10">Đã bỏ qua</p>
                          <span class="jungle">50</span>
                      </div>
                  </div>
                  </div><br>
      <div class="nav-right-calendar"></div><br>
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