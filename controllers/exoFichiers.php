<?php
	$title = "Exercices Fichiers";
	$consigne = "";

	$fp = fopen("../assets/counter.txt", "r+");
	$nbVisites = fgets($fp,5)+1;
	fseek($fp,0);
	fputs($fp, $nbVisites);
	fclose($fp);


	$fileTab = [];
	$dir = "../assets";
	if(is_dir($dir)){
		$folder = opendir($dir);
		while(($file = readdir($folder)) != false){
			if($file != "." && $file != ".."){
				array_push($fileTab, $file);
		}
	}

?>