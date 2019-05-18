<?php

include "utilities.php";

$allTasks = getAllTasks() ;

$now = new DateTime();

// var_dump($allTasks)	;




include "todolist.phtml";
