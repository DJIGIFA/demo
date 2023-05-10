<?php 

class User 
{
	
	private $pdo;
	function __construct($_pdo)
	{
		$this->pdo = $_pdo;
	}

  public function connection (int $numero, string $password){
  	$requet= "SELECT * FROM utilisateur where numero ='$numero' and password= '$password'";
	$stm= $this->pdo-> prepare($requet);

	if($stm->execute()){
		$ps = $stm->fetch(PDO::FETCH_ASSOC);
		
		return $ps;
	}
	else{
		return false;
	}

  }

	//connection
}

include 'connect.php';

$con = getConnection();
$user = new User($con);





 ?>