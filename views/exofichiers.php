<?php
	include "../controllers/exoFichiers.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fichiers</title>
	</head>
	<body>
		<?php	
			include "header.php";
		?>

		<div class="container">
			<div class="row">
				<div class="col s5 m4">
					<?php
					foreach($fileTab as $file){
					?>
						Dossier <?= $dir ?>
						<i class="material-icons">folder</i>
					<?php
					} ?>
				</div>
				<div class="col s1 m4"></div>
				<div class="col s5 m4">
					<h4>Compteur de visites</h4>
					<div class="imgContainer">
						<span class="fileContent"><?= $nbVisites ?></span>
						<img class="img-responsive overflowImage" height="200" src="../assets/imgs/notes.png"/><br>
						<span class="">Contenu de counter.txt</span>
					</div>			
				</div>
			</div>
		</div>
		

		<?php
			include "footer.php"
		?>
	</body>
</html>