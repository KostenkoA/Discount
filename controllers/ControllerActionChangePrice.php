<?php
require('../core/dbScript.php');

if (isset($_POST)) {
    $testDate = new \DateTime($_POST['testDate']);
    require('../models/ModelActionChangePrice.php');
   // echo $testDate->getTimestamp();
    if ($_POST['Interval'] === 'short') {
        $tovarList = executeSelectQuery($queryShort);
    }
    else
        $tovarList = executeSelectQuery($queryLast);


    require('../models/ModelActionChangePrice.php');
    $tovarName = executeSelectQuery($queryView);

     require ('../views/ViewActionChangePrice.php');
}
