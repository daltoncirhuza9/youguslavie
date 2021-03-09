<?php include "includes/navBars.php"; ?>





<!--We should have style="display: none"; so that we can set the receipt properly  -->


      <div class="content-wrapper"  >
        <div class="content">					<div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5">
						<div class="d-flex justify-content-between">
							<h2 class="text-dark font-weight-medium"> Receipt no ...........</h2>
							<div class="btn-group">
								<button class="btn btn-sm btn-secondary">
									<i class="mdi mdi-content-save"></i> Save</button>
								<button class="btn btn-sm btn-secondary">
									<i class="mdi mdi-printer"></i> Print</button>
							</div>
						</div>
						<div class="row pt-5">
							<div class="col-xl-3 col-lg-4">
								<p class="text-dark mb-2">De</p>
								<address>
									YOUGOUSLAVIE
									<br> Deriere   l'entrepot vanny bishweka pres de la quincaillerie MyFriend
									<br> Email: dal99cir@gmail.com
									<br> Phone: +243 977 755 355
								</address>
							</div>
							<div class="col-xl-3 col-lg-4">
								<p class="text-dark mb-2">To</p>
								<address>
									A ...........
									<br> address......
									<br> Email: example@gmail.com
									<br> Phone: +91 5264 521 943
								</address>
							</div>
							<div class="col-xl-3 col-lg-4">
								<p class="text-dark mb-2">Details</p>
								<address>
									Invoice ID:
									<span class="text-dark">#2365546</span>
									<br> March 25, 2018  (should be set automatically)

								</address>
							</div>
						</div>
						<table class="table mt-3 table-striped table-responsive table-responsive-large" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Article</th>
									<th>Description</th>
									<th>Nombres</th>
									<th>Prix</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Platinum Support</td>
									<td>1 year subcription 24/7</td>
									<td>1</td>
									<td>$3.999,00</td>
									<td>$3.999,00</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Custom Services</td>
									<td>Instalation and Customization (cost per hour)</td>
									<td>10</td>
									<td>$250,00</td>
									<td>$250,000</td>
								</tr>

							</tbody>
						</table>
						<div class="row justify-content-end">
							<div class="col-lg-5 col-xl-4 col-xl-3 ml-sm-auto">
								<ul class="list-unstyled mt-4">
									<li class="mid pb-3 text-dark"> Subtotal
										<span class="d-inline-block float-right text-default">$7.897,00</span>
									</li>
									<li class="mid pb-3 text-dark">Vat(10%)
										<span class="d-inline-block float-right text-default">$789,70</span>
									</li>
									<li class="pb-3 text-dark">Total
										<span class="d-inline-block float-right">$8.686,70</span>
									</li>
								</ul>
								<a href="#" class="btn btn-block mt-2 btn-lg btn-primary btn-pill"> Procced to Payment</a>
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



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
