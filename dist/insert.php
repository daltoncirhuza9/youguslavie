<?php


//  if(isset($_POST['valider'])){

//  // creating variables for the inputs
//   $nomArticle=$_POST['NomArticle'];
//   $typeArticle=$_POST['TypeArticle'];
//   $lieuImport=$_POST['LieuImportation'];
//   $qualite=$_POST['Qualite'];
//   $NombreTOtal=$_POST['NombreTotal'];
//   $nombreDispo=$_POST['NombreDispo'];
//   $prixAchat=$_POST['PrixAchat'];
//   $PrixVente=$_POST['PrixVente'];
//   $dateEntree=$_POST['DateEntree'];
//   $commentaire=$_POST['commentaire'];

//   //creating connection to localhost

//   $db['db_host']="localhost";
//   $db['db_user']="root";
//   $db['db_pass']="";
//   $db['db_name']="SystemYougou";
//   foreach ($db as $key => $value) {
//       define(strtoupper($key),$value);
//   }
//   $connection=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//   //  if($connection){
//   //     echo "we are connected";

//   //  }else{
//   //  echo " we are not connected";
//   //  }
//   // //writting the sql statement
//   $stat="INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,
//      PrixVente,DateEntree,NombreDispo,commentaire) VALUES(0,'$nomArticle','$typeArticle','$lieuImport','$qualite'
//      ,$NombreTOtal,$nombreDispo,$prixAchat,$PrixVente,now(),'$commentaire')";
//   //$query="INSERT INTO StockDepot VALUES (0,'$nomArticle','$typeArticle','$lieuImport','$qualite',$NombreTOtal,$nombreDispo,$prixAchat,$PrixVente,'$dateEntree','$commentaire')";
//   //executing the statement
//   $result=@mysqli_query($connection,$stat) or die (@mysqli_error(" not connected to the server"."".$connection));
//   //closing the connection
//   $close=@mysqli_close($connection);
//  }


// // if (isset($_POST['valider'])) {
// // 	$nomArticle=$_POST['nomArticle'];
// // 	$typeArticlec=$_POST['typeArticle'];
// // 	$lieuImport=$_POST['lieuImport'];
// // 	$qualite=$_POST['qualite'];
// // 	$NombreTOtal=$_POST['nombreTotal'];
// // 	$nombreDispo=$_POST['nombreDispo'];
// // 	$prixAchat=$_POST['prixAchat'];
// // 	$PrixVente=$_POST['prixvente'];
// // 	$dateEntree=$_POST['dateEntree'];
// // 	$commentaire=$_POST[' commentaire'];


// // 	$con=@mysqli_connect("localhost","root","") ;
// // 	$db=@mysqli_select_db($con,"SystemYougou") or die(@mysqli_error($con));
// // 	if($con){
// // 		echo "we are connected";
// // 	}else {
// // 		echo "we ain\'t connected";
// // 	}
// //     $stat="INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,
// //     PrixVente,DateEntree,NombreDispo,commentaire) VALUES(0,'$NomArticle','$TypeArticle','$LieuImportation','$Qualite'
// //     ,$NombreTotal,$NombreDispo,$PrixAchat,$PrixVente,now(),'$commentaire')";
// //     $result=@mysqli_query($con,$stat) or die(@mysqli_error($con));
// //     $close=@mysqli_close($con);
// // }


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
	$commentaire=htmlspecialchars($_POST['commentaire']);

	$ins = $bdd->prepare('INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,
	    PrixVente,DateEntree,NombreDispo,commentaire) VALUES (0,?,?,?,?,?,?,?,?,now(),?');
	$ins->execute(array($id,$NomArticle,$TypeArticle,$LieuImportation,$Qualite,$NombreTotal,$PrixAchat,
	$PrixVente,$DateEntree,$NombreDispo,$commentaire));

$msg ="<span> la marchandie a ete bien stoker</span>";
}else $msg ='<span>vous devez tout completer</span> ';
}
?>
