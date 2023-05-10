<?php 
session_start();
include 'produit.php';

if (isset($_POST['nom'])&& isset($_POST['prix'])&&isset($_POST['quantite'])&& isset($_POST['description'])) {
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$quantite=$_POST['quantite'];
	$target_dir = "./img/";
	$description=$_POST['description'];


$target_file = $target_dir .time() .basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["image"]["tmp_name"]);
	  if($check !== false) {
	    //echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    $_SESSION['erreur']= "File is not an image.";
	    $uploadOk = 0;
	  }


		if ($uploadOk == 0) {

		  $_SESSION['erreur']="Sorry, your file was not uploaded.";
		header('location:ajoutproduit.php');
		} else {
		  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		    
		$resultat= $produit->ajouter( $nom,  $prix, $quantite, substr($target_file, 2), $description );
		 
		 if ($resultat==true) {

		 	$_SESSION['enregistrer']="enregistrement effectué";
		   header('location:ajoutproduit.php');
		 }
		 else{
		 	$_SESSION['erreur']= "erreur d'enregistrement";
		 }


		  } else {

		   $_SESSION['erreur']=  "Sorry, there was an error uploading your file.";
		  }
		}
		}

		 header('location:ajoutproduit.php');







 ?>