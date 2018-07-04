<?php


function getData($table,$where=null,$what=null){
	
	$query=buildSelectQuery($table,$where,$what);
	return executeSelectQuery($query);
}

