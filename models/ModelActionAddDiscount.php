<?php

$query=buildInsertQuery(' datescondition',['idProduct'=>$_POST['id'],
    'startDiscount'=>$startDiscount,
    'endDiscount'=>$endDiscount,
    'newPrice'=>$_POST['newPrice'],
    'intervalDiscount' => $intervalDate
]);

executeQuery($query);
