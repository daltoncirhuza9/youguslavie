<?php include "includes/navBars.php"; ?>


      <div class="content-wrapper">
        <div class="content">							<div class="breadcrumb-wrapper">
								<h1>Inventaire </h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.php">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Tableaux de donnees
            </li>
            <li class="breadcrumb-item" aria-current="page">Tableau de donnees extensible</li>
          </ol>
        </nav>

							</div>

							<div class="row">
								<div class="col-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom d-flex justify-content-between">
											<h2>Tableau de donnees extensibles</h2>
<!--
											<a href="https://datatables.net/examples/api/row_details.html" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
												<i class=" mdi mdi-link mr-1"></i> Docs
											</a> -->
										</div>

										<div class="card-body">
											<div class="expendable-data-table">
												<table id="expendable-data-table" class="table display nowrap" style="width:100%">
													<thead>
														<tr>
															<th></th>
															<th>Nom d'article</th>
															<th>Type</th>
															<th>Prix</th>
															<th>Quantite</th>
															<th>Prix de vente</th>
															<th>Date de sortie</th>
															<th>dalton</th>
															<th>Extn.</th>
															<th>E-mail</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td class="details-control"></td>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>t.nixon@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>g.winters@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Ashton</td>
															<td>Cox</td>
															<td>Junior Technical Author</td>
															<td>San Francisco</td>
															<td>66</td>
															<td>2009/01/12</td>
															<td>$86,000</td>
															<td>1562</td>
															<td>a.cox@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Cedric</td>
															<td>Kelly</td>
															<td>Senior Javascript Developer</td>
															<td>Edinburgh</td>
															<td>22</td>
															<td>2012/03/29</td>
															<td>$433,060</td>
															<td>6224</td>
															<td>c.kelly@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Airi</td>
															<td>Satou</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>33</td>
															<td>2008/11/28</td>
															<td>$162,700</td>
															<td>5407</td>
															<td>a.satou@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Brielle</td>
															<td>Williamson</td>
															<td>Integration Specialist</td>
															<td>New York</td>
															<td>61</td>
															<td>2012/12/02</td>
															<td>$372,000</td>
															<td>4804</td>
															<td>b.williamson@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Herrod</td>
															<td>Chandler</td>
															<td>Sales Assistant</td>
															<td>San Francisco</td>
															<td>59</td>
															<td>2012/08/06</td>
															<td>$137,500</td>
															<td>9608</td>
															<td>h.chandler@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Rhona</td>
															<td>Davidson</td>
															<td>Integration Specialist</td>
															<td>Tokyo</td>
															<td>55</td>
															<td>2010/10/14</td>
															<td>$327,900</td>
															<td>6200</td>
															<td>r.davidson@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Colleen</td>
															<td>Hurst</td>
															<td>Javascript Developer</td>
															<td>San Francisco</td>
															<td>39</td>
															<td>2009/09/15</td>
															<td>$205,500</td>
															<td>2360</td>
															<td>c.hurst@datatables.net</td>
														</tr>

														<tr>
															<td class="details-control"></td>
															<td>Sonya</td>
															<td>Frost</td>
															<td>Software Engineer</td>
															<td>Edinburgh</td>
															<td>23</td>
															<td>2008/12/13</td>
															<td>$103,600</td>
															<td>1667</td>
															<td>s.frost@datatables.net</td>
														</tr>




													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>

								<!-- <div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom d-flex justify-content-between">
											<h2>How to use</h2>

											<a href="https://codepen.io/iamabdus/pen/zYYeeaX" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
												<i class="mdi mdi-codepen mr-1"></i> Open with codepen
											</a>
										</div>

										<div class="card-body">
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Javascript</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">HTML</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CSS</a>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent1">
												<div class="tab-pane pt-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->

<!-- <pre class="mt-4 pre-code">
 function format () {
  return '&lt;table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
         '&lt;tr>'+
           '&lt;td>Full name:&lt;/td>'+
           '&lt;td>Name...&lt;/td>'+
          '&lt;tr>'+
         '&lt;tr>'+
           '&lt;td>Extension number:&lt;/td>'+
           '&lt;td>123&lt;/td>'+
          '&lt;tr>'+
          '&lt;tr>'+
           '&lt;td>Extra info:&lt;/td>'+
           '&lt;td>And any further details here (images etc)...&lt;/td>'+
          '&lt;tr>'+
        '&lt;/table>';
     }

     $(document).ready(function() {
      var table = $('#expendable-data-table').DataTable( {
      "className":  'details-control',
      "order": [[0, 'asc']],
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '&lt;"row align-items-center justify-content-between top-information"lf>rt&lt;"row align-items-center justify-content-between bottom-information"ip>&lt;"clear">'
  });

  $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );
    if ( row.child.isShown() ) {
      row.child.hide();
      tr.removeClass('shown');
    }
    else {
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
   });
 });
</pre> -->

<!-- <pre class="mt-4">
<code>&lt;script src="assets/plugins/data-tables/jquery.datatables.min.js"&gt;&lt;/script&gt;</code>
<code>&lt;script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"&gt;&lt;/script&gt;</code>
</pre>
												</div>

												<div class="tab-pane pt-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<pre class="mt-4">
 &lt;table id="expendable-data-table" class="table display nowrap" style="width:100%"&gt;
   &lt;thead&gt;
    &lt;tr&gt;
     &lt;th&gt;&lt;/th&gt;
     &lt;th&gt;First name&lt;/th&gt;
     &lt;th&gt;Last name&lt;/th&gt;
     &lt;th&gt;Position&lt;/th&gt;
     &lt;th&gt;Office&lt;/th&gt;
     &lt;th&gt;Age&lt;/th&gt;
     &lt;th&gt;Start date&lt;/th&gt;
     &lt;th&gt;Salary&lt;/th&gt;
     &lt;th&gt;Extn.&lt;/th&gt;
     &lt;th&gt;E-mail&lt;/th&gt;
    &lt;/tr&gt;
   &lt;/thead&gt;

   &lt;tbody&gt;
    &lt;tr&gt;
     &lt;td class="details-control"&gt;&lt;/td&gt;
     &lt;td&gt;Tiger&lt;/td&gt;
     &lt;td&gt;Nixon&lt;/td&gt;
     &lt;td&gt;System Architect&lt;/td&gt;
     &lt;td&gt;Edinburgh&lt;/td&gt;
     &lt;td&gt;61&lt;/th&gt;
     &lt;td&gt;2011/04/25&lt;/td&gt;
     &lt;td&gt;$320,800&lt;/td&gt;
     &lt;th&gt;5421&lt;/td&gt;
     &lt;td&gt;t.nixon@datatables.net&lt;/td&gt;
    &lt;/tr&gt;
   &lt;/tbody&gt;
  &lt;/table&gt;
</pre>
												</div>

												<div class="tab-pane pt-3 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<pre class="mt-4">
<code>&lt;script src="assets/plugins/data-tables/jquery.datatables.min.css"&gt;&lt;/script&gt;</code>
<code>&lt;link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet"&gt;</code>
<code>&lt;link href=""https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css"&gt;</code>
</pre>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
</div> -->



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



<script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>



<script>
  /* Formatting function for row details - modify as you need */
  function format () {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>Name...</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>123</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
  }

  $(document).ready(function() {
    var table = $('#expendable-data-table').DataTable( {
      "className":      'details-control',
      "order": [[0, 'asc']],
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
    });

    // Add event listener for opening and closing details
    $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );

      if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      }
      else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
      }
    });
  });
</script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
