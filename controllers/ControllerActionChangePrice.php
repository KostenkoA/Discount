<?php
require('../core/dbScript.php');
require('../models/ModelActionChangePrice.php');

if (isset($_POST)) {
    $testDate = new \DateTime($_POST['testDate']);
    $tovarList = executeSelectQuery($query);
}

