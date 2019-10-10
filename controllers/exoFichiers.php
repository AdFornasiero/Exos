<?php
	$title = "Exercices Fichiers";
	$consigne = "";

	// Compteur de visites
	$fp = fopen("../assets/counter.txt", "r+");
	$nbVisites = fgets($fp,6)+1;
	fseek($fp,0);
	fputs($fp, $nbVisites);
	fclose($fp);


	// Recherche de l'arborescence
	$dir = "../assets"; // Dossier source
	$fullDir = realpath($dir);
	$dirName = basename($dir);
	if(is_dir($dir)){
		$folderContent = scandir($dir, 1); // Récupération du contenu dans un tableau
		array_pop($folderContent); array_pop($folderContent); 
	}

	// Recherche des sous dossiers
	$subfolderTab = [];// Création d'un tableau associatif qui comporte des tableaux listant le contenu de chaque sous dossier
	foreach($folderContent as $folder){ // Itération sur chaque noms de fichier
		if(!strpos($folder, ".")){ // Si c'est un dossier
			$subfolderTab[$folder] = scandir($dir."/".$folder, 1);
			array_pop($subfolderTab[$folder]); array_pop($subfolderTab[$folder]);
		}
	}


	// Récupération des liens
	$linkFile = "../assets/ListeLiens.txt";
	$links = file($linkFile);

?>