<?php

include "utilities.php" ;
// die('coucou') ;


// unset($tabTasks);
// $checked="";
// if(isset($_POST["afaire"])) {
// 	$checked=$_POST["afaire"];
// }
// foreach ($checked as $key => $value) {
	
// }
// var_dump($checked);
// var_dump( $supp=intval($checked[0]));

// var_dump($allTasks[$supp])	;
// unset($allTasks[$supp]);
// var_dump($allTasks[$supp]);
// // $allTasks = getAllTasks() ;

// var_dump($allTasks)	;

if(isset($_POST['lignes']))
{
	// foreach ($_POST['lignes'] as  $ligne) 
	// {
	// 	$ligne;
	// 	var_dump($ligne) ;
	// }

deleteTasks($_POST['lignes']);	


}
// if(!$_POST['lignes']) {
// header("Location: index.php");

// }
 
 header("Location: index.php");