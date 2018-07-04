<?php

if (isset($_POST)) {

    $startDiscountObj = new \DateTime($_POST['startDiscount']);
    $endDiscountObj = new \DateTime($_POST['endDiscount']);
    $interval = $startDiscountObj->diff($endDiscountObj);
    $startDiscount = $startDiscountObj->getTimestamp();
    $endDiscount = $endDiscountObj->getTimestamp();
    $intervalDate = $interval->format('%a');

    require('../core/dbScript.php');
    require('../models/ModelActionAddDiscount.php');

    echo 'Done! Your new discount period saved'.'<br><br>';
    ?>
    <a href="../index.php">Back</a> OR
    <a href="../views/ViewChangePrice.php">Change price</a>
<?php
}
else
    echo 'oops something went wrong';


