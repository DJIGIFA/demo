<?php 



class Produit
{
	private $pdo;
	function __construct($_pdo)
	{
		$this->pdo = $_pdo;
	}

     public function ajouter(string $nom, string $prix, int $quantite, string $image, string $description) {
	$requet = "INSERT INTO  produit (`id_produit`, `nom`,`prix`, `quantite`, `image`, `description`, `date`) Values (NULL,'$nom', '$prix','$quantite', '$image', '$description', NOW())";
	$stm= $this->pdo-> prepare($requet);

	if ($stm->execute()) {
		return true;
	}
	else{
		return false;
	}
}

public function getAllProduit(){
	 $requet="SELECT * FROM produit ";
	$stm = $this->pdo->prepare($requet);
	if ($stm->execute()) {
		$ps = $stm->fetchAll(PDO::FETCH_ASSOC);

		return $ps;
				
	}

}

public function getProduit (int $id){
	$requet = "SELECT * FROM produit WHERE id_produit ='$id'";
    $stm = $this->pdo->prepare($requet);
    if ($stm->execute()) {
    	$ps = $stm->fetch(PDO::FETCH_ASSOC);
    	return $ps;
    }
    else{
    	return false;
    }
    

}



public function SupprimerProduit(int $id)
	{
	    $requet = "DELETE from produit where id_produit='$id'";
	    $st = $this->pdo->prepare($requet);
	    if ($st->execute()) 
	    {
	        return true;
	    }
	    else{
	    	return false;
	    }
  
	}



}


include 'connect.php';

$con = getConnection();
$produit = new Produit($con);


 ?>