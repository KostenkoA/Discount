<?php

function executeQuery($query){
	
	$connection=mysqli_connect('mysql.zzz.com.ua','antonk','Kostenko121285','antonk');
	
	$result=mysqli_query($connection,$query);
	
	if ($result==false){
		echo mysqli_error($connection);
	}
	
	mysqli_close($connection);

	return $result;
}

function executeSelectQuery($query){

	$result=executeQuery($query);
	
	if (mysqli_num_rows($result)>0){
		
		while($row=mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}
		return $rows;
	}
	else{
		return null;
	}
	
}



function buildSelectQuery($table,$where='',$what=''){
	
	$whereSql='';
	if (!empty($where)){
		
		$and=' and ';
		
		foreach($where as $key=>$value){
			
			if ($value){
                $whereSql.=" $key=$value $and";
			}
		}

        $whereSql=rtrim($whereSql,$and);
		
		if (!empty($where_sql)){
            $whereSql=" WHERE ".$whereSql;
		}
		
	}
	
	$whatSql='';
	if (empty($what)){
        $whatSql =' * ';
	}
	else{
        $whatSql=$what;
	}

	return "SELECT $whatSql 
			FROM $table
			$whereSql";
}


function buildInsertQuery($table,$parameters){
	
	$columnsSql ='';
	$valuesSql  ='';
	$coma        =',';
	
	foreach($parameters as $col=>$value){
		if (!empty($value)){
            $columnsSql.=$col.$coma ;
            $valuesSql.="'".$value."'".$coma ;
		}		
	}

    $columnsSql=rtrim($columnsSql,$coma);
    $valuesSql =rtrim($valuesSql,$coma);
	
	return "INSERT INTO $table ($columnsSql)
					VALUES ($valuesSql)";
	
}

function buildUpdateQuery($table,$where='',$what=''){
	
	$whatSql='';
	if (!empty($what)){
		
		$coma=',';
		
		foreach($what as $key=>$value){
			
			if ($value){
                $whatSql.=" $key='$value'$coma";
			}
		}

        $whatSql=rtrim($whatSql,$coma);
	}
	
	$whereSql='';
	if (!empty($where)){
		
		foreach($where as $key=>$value){
			
			if ($value){
                $whereSql.=" $key='$value'";
			}
		}
		
		if (!empty($whereSql)){
            $whereSql=" WHERE ".$whereSql;
		}
		
	}

	return "UPDATE $table 
			SET $whatSql
			$whereSql";
}
