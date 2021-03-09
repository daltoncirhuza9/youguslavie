<?php include "includes/navBars.php"; ?>


      <div class="content-wrapper">
        <div class="content">						<!-- First Row  -->
						<div class="row">
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-white  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-dark mb-2">71,503</h3>
										<p>Online Signups</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="barChart1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-white  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-dark mb-2">9,503</h3>
										<p>Weekly Visitors</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="linechart1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-white  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-dark mb-2">71,503</h3>
										<p>Weekly Total Order</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="areaChart1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-white  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-dark mb-2">10,503</h3>
										<p>Revenue This Week</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="gline1"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Second Row  -->
						<div class="row">
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-primary  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-white mb-2">71,503</h3>
										<p>Online Signups</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="barChart2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-warning  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-white mb-2">9,503</h3>
										<p>Weekly Visitors</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="linechart2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-danger  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-white mb-2">71,503</h3>
										<p>Weekly Total Order</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="areaChart2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="widget-block rounded bg-success  d-flex">
									<div class="widget-info align-self-center w-50">
										<h3 class="text-white mb-2">10,503</h3>
										<p>Revenue This Week</p>
									</div>
									<div class="widget-chart w-50">
										<canvas id="gline2"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Third Row  -->
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-white ">
									<div class="card-block">
										<h3 class="text-dark">71,503</h3>
										<p class="py-2">Online Signups</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="barChart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-white ">
									<div class="card-block">
										<h3 class="text-dark">9,503</h3>
										<p class="py-2">New Visitors Today</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="dual-line"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-white ">
									<div class="card-block">
										<h3 class="text-dark">71,503</h3>
										<p class="py-2">Monthly Total Order</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="area-chart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-white ">
									<div class="card-block">
										<h3 class="text-dark">9,503</h3>
										<p class="py-2">Total Revenue This Year</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="line"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Fourth Row  -->
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-primary ">
									<div class="card-block">
										<h3 class="text-white">71,503</h3>
										<p class="py-2">Online Signups</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="barChart3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-warning ">
									<div class="card-block">
										<h3 class="text-white">9,503</h3>
										<p class="py-2">New Visitors Today</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="dual-line3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-danger ">
									<div class="card-block">
										<h3 class="text-white">71,503</h3>
										<p class="py-2">Monthly Total Order</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="area-chart3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card widget-block p-4 rounded bg-success ">
									<div class="card-block">
										<h3 class="text-white">9,503</h3>
										<p class="py-2">Total Revenue This Year</p>
									</div>
									<div class="chartjs-wrapper" style="height: 110px;">
										<canvas id="line3"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Fifth Row  -->
						<div class="row">
							<div class="col-xl-8 col-md-12">
                      <!-- Sales Graph -->
                      <!-- <div class="card card-default" data-scroll-height="675">
                        <div class="card-header">
                          <h2>Sales Of The Year</h2>
                        </div>
                        <div class="card-body">
                          <canvas id="linechart" class="chartjs"></canvas>
                        </div>
                        <div class="card-footer d-flex flex-wrap bg-white p-0">
                          <div class="col-6 px-0">
                            <div class="text-center p-4">
                              <h4>$6,308</h4>
                              <p class="mt-2">Total orders of this year</p>
                            </div>
                          </div>
                          <div class="col-6 px-0">
                            <div class="text-center p-4 border-left">
                              <h4>$70,506</h4>
                              <p class="mt-2">Total revenue of this year</p>
                            </div>
                          </div>
                        </div>
                      </div> -->
</div>
							<div class="col-xl-4 col-md-12">
                  <!-- Doughnut Chart -->
                  <!-- <div class="card card-default" data-scroll-height="675">
                    <div class="card-header justify-content-center">
                      <h2>Orders Overview</h2>
                    </div>
                    <div class="card-body" >
                      <canvas id="doChart" ></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-6">
                        <div class="py-4 px-4">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-6 border-left">
                        <div class="py-4 px-4 ">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div> -->
</div>
						</div>
						<!-- Sixth Row  -->
						<!-- <div class="row">
							<div class="col-xl-4 col-md-12">
								<div class="card card-default">
									<div class="card-header justify-content-center">
										<h2>Sale Overview</h2>
									</div>
									<div class="card-body pt-0" style="position: relative; height:50vh">
										<canvas id="polar"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-md-12">
								<div class="card card-default" id="user-acquisition">
									<div class="card-header justify-content-between pb-5">
										<h2 class=" text-dark">User Acquisition</h2>
									</div>
									<div class="card-body pt-0 mb-5" style="position: relative; height:45vh">
										<canvas id="acquisition" class="chartjs"></canvas>
										<div id="acqLegend" class="customLegend"></div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- Seventh Row  -->
						<!-- <div class="row">
							<div class="col-xl-8">
								<div class="card card-default" id="activity-user">
									<div class="card-header d-flex flex-wrap justify-content-between">
										<h2>User Activity</h2>
										<div class="date-range-report ">
											<span></span>
										</div>
									</div>
									<div class="card-body">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4">
								<div class="card card-default" id="activity-user">
									<div class="card-header">
										<h2>Current Users</h2>
									</div>
									<div class="card-body">
										<canvas id="currentUser" class="chartjs"></canvas>
									</div>
								</div>
							</div>
						</div> -->

						<!-- Recent Orders -->
						<div class="row">
							<div class="col-lg-6">
                          <!-- Sessions By device Chart -->
                          <!-- <div class="card card-default" id="analytics-device" data-scroll-height="580">
                            <div class="card-header justify-content-between">
                              <h2>Sessions by Device</h2>
                            </div>
                            <div class="card-body">
                              <div class="pb-5">
                                <canvas id="deviceChart"></canvas>
                              </div>
                              <div class="row no-gutters justify-content-center">
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-desktop-mac"></i>
                                    <p class="pt-3 pb-1">Desktop</p>
                                    <h4 class="text-dark pb-1">60.0%</h4>
                                    <span class="text-danger">1.5% <i class="mdi mdi-arrow-down-bold"></i></span>
                                  </div>
                                </div>
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-tablet-ipad"></i>
                                    <p class="pt-3 pb-1">Tablet</p>
                                    <h4 class="text-dark pb-1">15.0%</h4>
                                    <span class="text-success">1.5% <i class="mdi mdi-arrow-up-bold"></i></span>
                                  </div>
                                </div>
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-cellphone-android fa-3x"></i>
                                    <p class="pt-3 pb-1">Mobile</p>
                                    <h4 class="text-dark pb-1">25.0%</h4>
                                    <span class="text-success">1.5% <i class="mdi mdi-arrow-up-bold"></i></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
</div>
							<!-- <div class="col-lg-6">
								<div class="card card-default" id="activity-user">
									<div class="card-header">
										<h2>Sale Overview</h2>
									</div>
									<div class="card-body">
										<canvas id="radar"></canvas>
									</div>
								</div>
							</div>
						</div> -->
</div>



<div class="right-sidebar-2">
    <div class="right-sidebar-container-2">
      <div class="slim-scroll-right-sidebar-2">

      <div class="right-sidebar-2-header">
        <h2>Layout Settings</h2>
        <p>User Interface Settings</p>
        <div class="btn-close-right-sidebar-2">
          <i class="mdi mdi-window-close"></i>
        </div>
      </div>

      <div class="right-sidebar-2-body">
        <span class="right-sidebar-2-subtitle">Header Layout</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
        </div>

        <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
        <div class="no-col-space">
          <select class="right-sidebar-2-select" id="sidebar-option-select">
            <option value="sidebar-fixed">Fixed Default</option>
            <option value="sidebar-fixed-minified">Fixed Minified</option>
            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
            <option value="sidebar-static">Static Default</option>
            <option value="sidebar-static-minified">Static Minified</option>
            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
          </select>
        </div>

        <span class="right-sidebar-2-subtitle">Header Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
        </div>

        <span class="right-sidebar-2-subtitle">Navigation Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
        </div>

        <span class="right-sidebar-2-subtitle">Direction</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 30px">
          <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
            Settings</div>
        </div>

      </div>

    </div>
  </div>

</div>

      </div>

                <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2020</span> Copyright dal99cirExpress by
                <a
                  class="text-primary"
                  href="http://www.dal99cir.com/"
                  target="_blank"
                  >Dalton cirhuza</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>



<script src="assets/plugins/charts/Chart.min.js"></script>



<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
