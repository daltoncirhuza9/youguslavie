<?php include "includes/navBars.php"; ?>
<?php include "includes/function.php";?>



      <div class="content-wrapper">
        <div class="content">							<div class="breadcrumb-wrapper">
								<h1>Stock & Depot</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.php">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Tableaux De Donnees

            </li>
            <li class="breadcrumb-item" aria-current="page">Tableau de donnees extensibles</li>
          </ol>
        </nav>

							</div>

							<div class="row">
								<div class="col-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom d-flex justify-content-between">
											<h2>Tableau de donnees extensibles</h2>

											<!-- <a href="https://datatables.net/extensions/rowreorder/examples/initialisation/responsive.html" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
												<i class=" mdi mdi-link mr-1"></i> Docs
                      </a> -->

										</div>

										<div class="card-body">
											<div class="responsive-data-table">
												<table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
													<thead>
														<tr>
                              <th>!!!</th>
															<th>Nom d'article</th>
															<th>Type D'article</th>
															<th>Qualite</th>
                              <th> Nombre disponible</th>
															<th>Prix de vente</>
                              <th> Commentaire</th>
														</tr>
													</thead>

													<tbody>
                            <!-- Script for enabling the input and the validate button-->
                          <script>
                            function  enableFun(enable1) {
                              var enableN1 = document.getElementById('inputEnable');
                              enableN1.disabled=enable1.checked?false:true;
                              if(!enableN1.disabled){
                                enableN1.focus();
                              }

                             }
                          </script>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
<input type="text" size="30" onkeyup="showResult(this.value)">
<label for="">Recherche</label><div id="livesearch"></div>

                          <?php
                    //creating the connection to the database
                    $connection=@mysqli_connect("localhost","root","")or die ('connection failed'.@mysqli_error($connection));
                    //selecting the db
                    $select =@mysqli_select_db($connection,'SystemYougou') or die ('Please check your connection'.@mysqli_error($connection));
                    //mysql statement for executing the query
                    $stat= "SELECT * FROM StockDepot";
                    //results
                    $result=@mysqli_query($connection,$stat) or die ('please check with your mysqli_statement'.@mysqli_error($connection,$stat));

                     //now it's time for looping the statement
                      ?>
                      <?php
                      while($value=@mysqli_fetch_array($result)){
                        ?>
                        <tr>
                              <td><input type="checkbox" onclick="enableFun(this)"></td>
															<td><?php echo $value['NomArticle'];?></td>
															<td><?php echo $value['TypeArticle'];?></td>
															<td><?php echo $value['Qualite'];?></td>
                              <td><?php echo $value['NombreDispo'];?></td>
															<td><input type="text" disabled="disabled" id="inputEnable"></td>
                              <td ><?php echo $value['commentaire'];?></td>
                              <td><button class="btn btn-primary btn-pill " disabled>valider</button></td>
														</tr>
                        <?php


                      }
                      @mysqli_close($connection);
                      ?>
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

											<a href="https://codepen.io/iamabdus/pen/ExxrJWw" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
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
  jQuery(document).ready(function() {
   jQuery('#responsive-data-table').DataTable({
    "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
    "pageLength": 20,
    "dom": '&lt;"row justify-content-between top-information"lf&gt;rt&lt;"row justify-content-between bottom-information"ip>&lt;"clear"&gt;'
   });
  });
</pre> -->

<!-- <pre class="mt-4">
<code>&lt;script src="assets/plugins/data-tables/jquery.datatables.min.js"&gt;&lt;/script&gt;</code>
<code>&lt;script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"&gt;&lt;/script&gt;</code>
<code>&lt;script src="assets/plugins/data-tables/datatables.responsive.min.js"&gt;&lt;/script&gt;</code>
</pre> -->
												</div>

												<!-- <div class="tab-pane pt-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<pre class="mt-4">
 &lt;table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%"&gt;
  &lt;thead&gt;
   &lt;tr&gt;
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
<code>&lt;link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet"&gt;</code>
<code>&lt;link href="assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet"&gt;</code>
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



<script src="assets/plugins/data-tables/datatables.responsive.min.js"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('#responsive-data-table').DataTable({
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
  });
</script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
