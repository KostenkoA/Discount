<?php
	require('./models/ModelAddDiscount.php');
	
	$what=null;
	if (isset($_POST['id']))
		$what=['id'=>$_POST['id']];
	
	$tovarList=getData('product',$what);


	require_once('./views/ViewAddDiscount.php');
