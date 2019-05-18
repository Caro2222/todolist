<?php
include "utilities.php" ;


function addTask($titre, $description, $dateFin, $priorite)
{
	$tabTache = [$titre, $description, $dateFin, $priorite] ;
	saveTask($tabTache) ;
}



$strDate="";
if(isset($_POST["date"])
 && isset($_POST["mois"]) && isset($_POST["annee"]))
	{
	$strDate= $_POST["date"]."-".$_POST["mois"]."-".$_POST["annee"];
	}
	//var_dump($strDate);

 	

$text="";
if(isset($_POST["titre"])) {
	$text=$_POST["titre"];
}
$descriptionUser="";
if(isset($_POST["description"])) {
	$descriptionUser=$_POST["description"];
} 

$prio="normal";
if(isset($_POST["priorite"])) {
	$prio=$_POST["priorite"];
} 

addTask($text, $descriptionUser, $strDate, $prio) ;
header("Location: index.php");
