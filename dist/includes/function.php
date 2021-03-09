



<?php
 function stockDepot(){

  if(isset($_POST['valider'])){
    $NomArticle=$_POST['NomArticle'];
    $TypeArticle=$_POST['TypeArticle'];
    $LieuImportation=$_POST['LieuImportation'];
    $Qualite=$_POST['Qualite'];
    $NombreTotal=$_POST['NombreTotal'];
    $PrixAchat=$_POST['PrixAchat'];
    $PrixVente=$_POST['PrixVente'];
    $DateEntree=$_POST['DateEntree'];
    $NombreDispo=$_POST['NombreDispo'];
    $commentaire=$_POST['commentaire'];
  //creating connection

  $connection =@mysqli_connect("localhost","root","") or die ('please check wtih your connection'.@mysqli_error($connection));
  // selecting database
  $db=@mysqli_select_db($connection,"SystemYougou") or die ( @mysqli_error($connection));
  //query statement
  $query="INSERT INTO StockDepot(id,NomArticle,TypeArticle,LieuImportation,Qualite,NombreTotal,PrixAchat,PrixVente,DateEntree,NombreDispo,commentaire)
  values(0,'$NomArticle','$TypeArticle','$LieuImportation','$Qualite',$NombreTotal,$PrixAchat,$PrixVente,now(),$NombreDispo,'$commentaire')";
  //executing the query
  $result=@mysqli_query($connection,$query)or die ('failed to insert'. @mysqli_error($connection));
  $close=@mysqli_close($connection);

  }

  // $db['db_host']="localhost";
  // $db['db_user']="root";
  // $db['db_pass']="";
  // $db['db_name']="SystemYougou";
  // foreach ($db as $key => $value) {
  //     define(strtoupper($key),$value);
  // }
  // $connection=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  // //  if($connection){
  // //     echo "we are connected";

  // //  }else{
  // //  echo " we are not connected";
  // //  }

 }

//  function ShowStock()
//  {

//  }



?>
