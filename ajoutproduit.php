<?php 

include 'header.php';


 ?>

<div class="container ajout">
<h1 class="text-center">Ajouter un produit</h1>
<?php 
if (isset($_SESSION['enregistrer'])){
	echo '
		<div class="alert alert-success">
			le produit a été ajouté avec sucèss
		</div>

	';
}

if (isset($_SESSION['erreur'])){

	echo '
		<div class="alert alert-danger"> '.$_SESSION['erreur']. '
		</div>

	';
}

 ?>
<form action="ajoutconnect.php" method="post" enctype="multipart/form-data">
	
<div class="form-group">
	<label for="nom">Nom</label>
	<input id="nom" class="form-control" type="text" name="nom">
</div>

<div class="form-group">
	<label for="prix">Prix</label>
	<input id="prix" class="form-control" type="text" name="prix">
</div>

<div class="form-group">
	<label for="quantite">Quantite</label>
	<input id="quantite" class="form-control" type="number" name="quantite">
</div>

<div class="form-group">
	<label for="image">Image</label>
	<input id="image" class="form-control" type="file" required name="image">
</div>


<div class="form-group">
	<label for="description">Description</label>
	<input id="description" class="form-control" type="text" name="description">
</div>

<div class="form-group">
	
<input type="submit" value="Enregistrer"  name="enregistrer">
</div>

</form>

</div>

<style type="text/css">
	.ajout{
		padding-left: 20%;
		padding-right: 20%;	}
</style>

<?php 
include 'footer.php';
 ?>