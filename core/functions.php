<?php

function createSelect($selectName,$array,$currentOption=null)
{
	$selectStr = "<select name=\"$selectName\">";
	
	for ($i=0;$i<count($array);$i++)
	{
		$id  =$array[$i]["id"];
		$name=$array[$i]["name"];
	
		if ($currentOption==$array[$i]["id"])
            $selectStr.="<option value=\"$id\" selected \">".$name."</option>";
		else
            $selectStr.="<option value=\"$id\" \>".$name."</option>";
	}

    $selectStr.="</select>";
	
	return $selectStr;
}

