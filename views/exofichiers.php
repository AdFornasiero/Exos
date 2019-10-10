<?php
	include "../controllers/exoFichiers.php";	
	include "header.php";
?>

<div class="container">
	<div class="row">
		<div class="col s5">
			<h4>Contenu d'un répertoire</h4>
			<h6 class="right-align"><?= $fullDir ?></h6>
			<div class="card showDir">
				<ul>
					<i class="material-icons">folder</i><span class="filenames"><?= $dirName ?></span>
					<ul>
					<?php foreach($folderContent as $file){ ?>
						<li><i class="material-icons"><?= (!strpos($file, ".")) ? "folder_open" : "insert_drive_file" ?></i><span class="filenames"><?= $file ?></span>
							<ul>
							<?php if(array_key_exists($file, $subfolderTab)){

								foreach($subfolderTab[$file] as $subfile){ ?>
									<li><i class="material-icons"><?= (!strpos($subfile, ".")) ? "folder_open" : "insert_drive_file" ?></i><span class="filenames"><?= $subfile; } ?></span></li>

							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</ul>
			</div>
		</div>
		<div class="col s2"></div>
		<div class="col s4">
			<h4>Compteur de visites</h4>
			<div class="imgContainer">
				<span class="fileContent"><?= $nbVisites ?></span>
				<img class="img-responsive overflowImage" height="200" src="../assets/imgs/notes.png"/><br>
				<span class="">Contenu de counter.txt</span>
			</div>			
		</div>
	</div>
	<div class="row">
		<ul class="collection with-header center">
			<li class="collection-header"><h4>Liste de liens</h4></li>

			<?php foreach($links as $link){ ?>
				<li class="collection-item">
					<a class="link" target="_blank" href="<?= $link ?>"><?= $link ?></a>
				</li>
			<?php } ?>

		</ul>
	</div>
</div>


<?php
	include "footer.php"
?>