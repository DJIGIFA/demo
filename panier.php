<?php 



class Panier
{
	private $pdo;
	function __construct($_pdo)
	{
		$this->pdo = $_pdo;
	}

     public function ajouter(int $id_produit, int $id_utilisateur) {
	$requet = "INSERT INTO  panier (`id`,`id_produit`, `id_utilisateur`, `date`) Values (NULL,'$id_produit', '$id_utilisateur', NOW())";
	$stm= $this->pdo-> prepare($requet);

	if ($stm->execute()) {
		return true;
	}
	else{
		return false;
	}
}

public function getAllPanier(int $id_utilisateur){
	 $requet="SELECT * FROM panier where id_utilisateur=$id_utilisateur ";
	$stm = $this->pdo->prepare($requet);
	if ($stm->execute()) {
		$ps = $stm->fetchAll(PDO::FETCH_ASSOC);

		return $ps;
				
	}

}

public function getPanier (int $id){
	$requet = "SELECT * FROM panier WHERE id ='$id'";
    $stm = $this->pdo->prepare($requet);
    if ($stm->execute()) {
    	$ps = $stm->fetch(PDO::FETCH_ASSOC);
    	return $ps;
    }
    else{
    	return false;
    }
    

}



public function SupprimerPanier(int $id)
	{
	    $requet = "DELETE from panier where id='$id'";
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
$panier = new Panier($con);


 ?>