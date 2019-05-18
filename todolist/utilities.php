<?php

const FILE_NAME ="todoList.csv"; 

function deleteTasks($tabLignes)
{
	$aRetirer=[];
	$file = fopen(FILE_NAME, "r");
	while ($ligne = fgetcsv($file)) 
	{
		if(!in_array($ligne, $aRetirer))
		{
			$aRetirer[]=$ligne;
		}

		$ligne++;
	}
	fclose($file);
	saveManyTasks($aRetirer);	
}

function getAllTasks() 
{
	
	$file = fopen(FILE_NAME, "r");

	$tabTasks =[];
	while($ligne = fgetcsv($file))
	{
		$tabTasks[] = $ligne ;
	}
	fclose($file);
	return $tabTasks ;

}

function saveTask($tabTask)
{


	$file= fopen(FILE_NAME, "a");
	fputcsv($file, $tabTask);
	fclose($file);
}



function saveManyTasks($tabTasks)
{
	$file= fopen(FILE_NAME, "w");
	foreach ($tabTasks as  $task) 
	{
		fputcsv($file, $task);
	}
	fclose($file);

}