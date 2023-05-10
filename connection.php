<?php 
session_start();
include 'user.php';
      
if (isset($_POST['numero'])&& isset($_POST['password']) && isset($_POST['connecter'])) {
    $numero=$_POST['numero'];
    $password=$_POST['password'];

    $resultat=$user->connection( $numero, $password);
    if ($resultat!=false) {
        $_SESSION['connecter']='oui';
        $_SESSION['id']=$resultat['id_utilisateur'];
        $_SESSION['droit']=$resultat['poste'];
        $_SESSION['nom']=$resultat['nom_user'];
        $_SESSION['prenom']=$resultat['prenom'];
        $_SESSION['numero']=$resultat['numero'];


        header('location:index.php');
    }
    else{
       $_SESSION['erreur']="connection";
       header('location:login.php'); 
    }

}

?>  