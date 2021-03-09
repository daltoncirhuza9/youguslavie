<?php include "includes/navBars.php"; ?>


      <div class="content-wrapper">
        <div class="content">							<div class="breadcrumb-wrapper">
								<h1>Tables</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.php">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              tables
            </li>
            <li class="breadcrumb-item" aria-current="page">basic-tables</li>
          </ol>
        </nav>

							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Basic Table</h2>
										</div>
										<div class="card-body">
											<p class="mb-5">Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap <a href="http://getbootstrap.com/docs/4.1/content/tables/"
												 target="_blank"> more details.</a></p>
											<table class="table">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr>
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr>
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr>
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr>
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr>
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Striped Table</h2>
										</div>
										<div class="card-body">
											<p class="mb-5">Use <code>.table-striped</code> to add zebra-striping to any table row within the &lt;tbody&gt;. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#striped-rows" target="_blank"> more details.</a></p>
											<table class="table table-striped">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr>
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr>
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr>
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr>
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr>
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

								</div>
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Bordered Table</h2>
										</div>
										<div class="card-body">
											<p class="mb-5">Add <code>.table-bordered</code> for borders on all sides of the table and cells. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#bordered-table" target="_blank"> more details.</a></p>
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr>
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr>
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr>
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr>
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr>
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Contextual Table</h2>
										</div>
										<div class="card-body">
											<p class="mb-5">Use contextual classes to color table rows or individual cells. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#contextual-classes" target="_blank"> more details.</a></p>
											<table class="table">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr class="table-secondary">
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr class="table-primary">
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr class="table-info">
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr class="table-success">
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr class="table-danger">
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr class="table-warning">
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

								</div>
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Dark Table</h2>
										</div>
										<div class="card-body">
											<p class="mb-5"> You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#table-head-options" target="_blank"> more details.</a></p>
											<table class="table table-dark">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr>
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr>
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr>
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr>
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr>
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Table head options</h2>
										</div>
										<div class="card-body">
											<p class="mb-5">Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code>.thead-dark</code> to make &lt;thead&gt;s appear light or dark gray. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#table-head-options" target="_blank"> more details.</a></p>
											<table class="table table-hover ">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td scope="row">1</td>
														<td>Lucia</td>
														<td>Christ</td>
														<td>@Lucia</td>
													</tr>
													<tr>
														<td scope="row">2</td>
														<td>Catrin</td>
														<td>Seidl</td>
														<td>@catrin</td>
													</tr>
													<tr>
														<td scope="row">3</td>
														<td>Lilli</td>
														<td>Kirsh</td>
														<td>@lilli</td>
													</tr>
													<tr>
														<td scope="row">4</td>
														<td>Else</td>
														<td>Voigt</td>
														<td>@voigt</td>
													</tr>
													<tr>
														<td scope="row">5</td>
														<td>Ursel</td>
														<td>Harms</td>
														<td>@ursel</td>
													</tr>
													<tr>
														<td scope="row">6</td>
														<td>Anke</td>
														<td>Sauter</td>
														<td>@Anke</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th class="d-none d-lg-table-cell">Units</th>
                            <th class="d-none d-lg-table-cell">Order Date</th>
                            <th class="d-none d-lg-table-cell">Order Cost</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Coach Swagger</a>
                            </td>
                            <td class="d-none d-lg-table-cell">1 Unit</td>
                            <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-lg-table-cell">$230</td>
                            <td >
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                            </td>
                            <td class="d-none d-lg-table-cell">2 Units</td>
                            <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                            <td class="d-none d-lg-table-cell">$550</td>
                            <td >
                              <span class="badge badge-warning">Delayed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Hat Black Suits</a>
                            </td>
                            <td class="d-none d-lg-table-cell">1 Unit</td>
                            <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                            <td class="d-none d-lg-table-cell">$325</td>
                            <td >
                              <span class="badge badge-warning">On Hold</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                            </td>
                            <td class="d-none d-lg-table-cell">5 Units</td>
                            <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                            <td class="d-none d-lg-table-cell">$200</td>
                            <td >
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Speed 500 Ignite</a>
                            </td>
                            <td class="d-none d-lg-table-cell">1 Unit</td>
                            <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                            <td class="d-none d-lg-table-cell">$150</td>
                            <td >
                              <span class="badge badge-danger">Cancelled</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
							</div>
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
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
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
