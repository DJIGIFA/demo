<?php 



class Favoris
{
	private $pdo;
	function __construct($_pdo)
	{
		$this->pdo = $_pdo;
	}

     public function ajouter(int $id_produit, int $id_utilisateur) {
	$requet = "INSERT INTO  favoris (`id`,`id_produit`, `id_utilisateur`, `date`) Values (NULL,'$id_produit', '$id_utilisateur', NOW())";
	$stm= $this->pdo-> prepare($requet);

	if ($stm->execute()) {
		return true;
	}
	else{
		return false;
	}
}

public function getAllFavoris(int $id_utilisateur){
	 $requet="SELECT * FROM favoris where id_utilisateur=$id_utilisateur";
	$stm = $this->pdo->prepare($requet);
	if ($stm->execute()) {
		$ps = $stm->fetchAll(PDO::FETCH_ASSOC);

		return $ps;
				
	}

}

public function getFavoris (int $id){
	$requet = "SELECT * FROM favoris WHERE id ='$id'";
    $stm = $this->pdo->prepare($requet);
    if ($stm->execute()) {
    	$ps = $stm->fetch(PDO::FETCH_ASSOC);
    	return $ps;
    }
    else{
    	return false;
    }
    

}



public function SupprimerFavoris(int $id)
	{
	    $requet = "DELETE from favoris where id='$id'";
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
$favoris = new Favoris($con);


 ?>