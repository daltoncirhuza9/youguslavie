<?php include "includes/navBars.php"; ?>


<?php

//  if(isset($_POST['valider'])){

  // creating variables for the inputs
//   $nomArticle=$_POST['nomArticle'];
//   $typeArticlec=$_POST['typeArticle'];
//   $lieuImport=$_POST['lieuImport'];
//   $qualite=$_POST['qualite'];
//   $NombreTOtal=$_POST['nombreTotal'];
//   $nombreDispo=$_POST['nombreDispo'];
//   $prixAchat=$_POST['prixAchat'];
//   $PrixVente=$_POST['prixvente'];
//   $dateEntree=$_POST['dateEntree'];
//   $commentaire=$_POST[' commentaire'];

  //creating connection to localhost

//   $db['db_host']="localhost";
//   $db['db_user']="root";
//   $db['db_pass']="";
//   $db['db_name']="SystemYougou";
//   foreach ($db as $key => $value) {
//       define(strtoupper($key),$value);
//   }
//   $connection=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//    if($connection){
//       echo "we are connected";

//    }else{
//    echo " we are not connected";
//    }
//   //writting the sql statement
//   $query="INSERT INTO StockDepot VALUES (0,'$nomArticle','$typeArticle','$lieuImport','$qualite',$NombreTOtal,$nombreDispo,$prixAchat,$PrixVente,'$dateEntree','$commentaire')";
//   //executing the statement
//   $result=@mysqli_execute_query($connection,$query) or die (@mysqli_error(" not connected to the server"."".$connection));
//   //closing the connection
//   $close=@mysqli_close($connection);
//  }
// if (isset($_POST['valider'])) {
//   echo "<h1> we are form Town we dont give a damn about that</h1>";

//   echo "<h1> we are not connected</h1>";
// }

// if (isset($_POST['valider'])) {
// 	$nomArticle=$_POST['nomArticle'];
// 	$typeArticlec=$_POST['typeArticle'];
// 	$lieuImport=$_POST['lieuImport'];
// 	$qualite=$_POST['qualite'];
// 	$NombreTOtal=$_POST['nombreTotal'];
// 	$nombreDispo=$_POST['nombreDispo'];
// 	$prixAchat=$_POST['prixAchat'];
// 	$PrixVente=$_POST['prixvente'];
// 	$dateEntree=$_POST['dateEntree'];
// 	$commentaire=$_POST[' commentaire'];


// 	$con=@mysqli_connect("localhost","root","") ;
// 	$db=@mysqli_select_db($con,"SystemYougou") or die(@mysqli_error($con));
// 	if($con){
// 		echo "we are connected";
// 	}else {
// 		echo "we ain\'t connected";
// 	}
//     $stat="INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,
//     PrixVente,DateEntree,NombreDispo,commentaire) VALUES(0,'$NomArticle','$TypeArticle','$LieuImportation','$Qualite'
//     ,$NombreTotal,$NombreDispo,$PrixAchat,$PrixVente,now(),'$commentaire')";
//     $result=@mysqli_query($con,$stat) or die(@mysqli_error($con));
//     $close=@mysqli_close($con);
// }


$bdd = new PDO('mysql:host=localhost;dbname=SystemYougou','root','');
if (isset($_POST['valider'])){
if(isset($_POST['NomArticle'],$_POST['TypeArticle'],$_POST['LieuImportation'],$_POST['Qualite'],$_POST['NombreTotal'],$_POST['PrixAchat'],
$_POST['PrixVente'],$_POST['DateEntree'],$_POST['commentaire'])AND !empty($_POST['NomArticle']) AND !empty($_POST['TypeArticle']) AND !empty($_POST['LieuImportation']) AND !empty($_POST['Qualite'])AND !empty($_POST['NombreTotal'])
AND !empty($_POST['PrixAchat'])AND !empty($_POST['PrixVente']) AND !empty($_POST['DateEntree'])And !empty($_POST['commentaire'])){


	$NomArticle=htmlspecialchars($_POST['NomArticle']);
	$TypeArticle=htmlspecialchars($_POST['TypeArticle']) ;
	$LieuImportation=htmlspecialchars($_POST['LieuImportation']);
	$Qualite=htmlspecialchars($_POST['Qualite']) ;
	$NombreTotal=htmlspecialchars($_POST['NombreTotal']) ;
	$PrixAchat=htmlspecialchars($_POST['PrixAchat']) ;
	$PrixVente=htmlspecialchars($_POST['PrixVente']) ;
	$DateEntree=htmlspecialchars($_POST['DateEntree']) ;
	$NombreDispo=htmlspecialchars($_POST['NombreDispo']) ;
	$commentaire=htmlspecialchars($_POST[' commentaire']);

	$ins = $bdd->prepare('INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,
	    PrixVente,DateEntree,NombreDispo,commentaire) VALUES (0,?,?,?,?,?,?,?,now(),?');
	$ins->execute(array($id,$NomArticle,$TypeArticle,$LieuImportation,$Qualite,$NombreTotal,$PrixAchat,
	$PrixVente,$DateEntree,$NombreDispo,$commentaire));

$msg ="<span> la marchandie a ete bien stoker</span>";
}else $msg ='<span>vous devez tout completer</span> ';
}
?>
      <div class="content-wrapper">
        <div class="content">
          	<div class="row">
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Ajouter dans le stock</h2>
										</div>
										<div class="card-body">
											<form >
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label for="validationServer01">Nom d'article</label>
														<input type="text" class="form-control " name=NomArticle" id="validationServer01" placeholder="Non d'article" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
                          </div>
                          <div class="col-md-12 mb-3">
														<label for="validationServer01">Type d'article</label>
														<input type="text" class="form-control " name="TypeArticle" id="validationServer01" placeholder="Type d'article" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
                          </div>
                          <div class="col-md-12 mb-3">
														<label for="validationServer01">Lieu D'importation</label>
														<input type="text" class="form-control " name="LieuImportation" id="validationServer01" placeholder="Lieu D'importation" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
                          </div>
                          <div class="col-md-12 mb-3">
														<label for="validationServer01">Qualite</label>
														<input type="text" class="form-control " name="Qualite" id="validationServer01" placeholder="Qualite" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<label for="validationServer02">Nombre total</label>
														<input type="text" class="form-control " name="NombreTotal" id="validationServer02" placeholder="nombre total" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
                          </div>
                          <div class="col-md-12 mb-3">
														<label for="validationServer02"> Nombre disponible</label>
														<input type="text" class="form-control " name="NombreDispo" id="validationServer02" placeholder="nombre total" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<label for="validationServerUsername">Prix d'achat</label>
														<input type="text" class="form-control " name="PrixAchat" id="validationServerUsername" placeholder="prix d'achat" aria-describedby="inputGroupPrepend3"
														 required>
														<div class="invalid-feedback">

														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-6 mb-3">
														<label for="validationServer03">Prix de vente </label></label>
														<input type="text" class="form-control " name="PrixVente" id="validationServer03" placeholder="Prix de vente" >
														<div class="invalid-feedback">

														</div>
													</div>
													<div class="col-md-3 mb-3">
														<label for="validationServer04">Date D'entree</label>
														<input type="text" class="form-control " name="DateEntree" id="validationServer04" placeholder="">
														<div class="invalid-feedback">
															Please provide a valid state.
														</div>
                          </div>

                          <div class="col-md-12 mb-3">
														<label for="validationServer01"  >Commentaire</label><br>
														<textarea name="commentaire" id="commentaire" name="commentaire" cols="50" rows="3"></textarea>
														<div class="valid-feedback">
															Looks good!
														</div>
                          </div>
												</div>
												<button type="submit" name="valider" class="btn btn-primary">Valider</button>
												<!-- <button type="submit" class="btn btn-primary"  name="valider" >Valider</button> -->
											</form>
                    </div>



									</div>
								</div>
								<!-- <div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Highlighted Input Field</h2>
										</div>
										<div class="card-body">
											<form >
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label for="validationServer01">First name</label>
														<input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Md"
														 required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<label for="validationServer02">Last name</label>
														<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Rahad"
														 required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<label for="validationServerUsername">Username</label>
														<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username"
														 aria-describedby="inputGroupPrepend3" required>
														<div class="invalid-feedback">
															Please choose a username.
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-6 mb-3">
														<label for="validationServer03">City</label>
														<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
														<div class="invalid-feedback">
															Please provide a valid city.
														</div>
													</div>
													<div class="col-md-3 mb-3">
														<label for="validationServer04">State</label>
														<input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
														<div class="invalid-feedback">
															Please provide a valid state.
														</div>
													</div>
													<div class="col-md-3 mb-3">
														<label for="validationServer05">Zip</label>
														<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
														<div class="invalid-feedback">
															Please provide a valid zip.
														</div>
													</div>
												</div>
												<button class="btn btn-primary" type="submit">Submit form</button>
											</form>
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



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
