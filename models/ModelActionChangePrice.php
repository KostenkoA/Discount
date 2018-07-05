<?php
$queryShort = 'SELECT newPrice, idDiscount, intervalDiscount
              FROM datescondition
              WHERE startDiscount < '.$testDate->getTimestamp().' 
              AND endDiscount > '.$testDate->getTimestamp().' 
              AND intervalDiscount = (SELECT MIN(intervalDiscount)
                                      FROM datescondition
                                      WHERE startDiscount < '.$testDate->getTimestamp().' 
                                      AND endDiscount > '.$testDate->getTimestamp().')';

$queryLast = 'SELECT newPrice, idDiscount
              FROM datescondition
              WHERE startDiscount < '.$testDate->getTimestamp().' 
              AND endDiscount > '.$testDate->getTimestamp().' 
              AND idDiscount = (SELECT MAX(idDiscount)
                                      FROM datescondition
                                      WHERE startDiscount < '.$testDate->getTimestamp().' 
                                      AND endDiscount > '.$testDate->getTimestamp().')';

$queryView = 'SELECT name
              FROM product
              WHERE type_id = (SELECT idProduct
                               FROM datescondition
                               WHERE idDiscount='.$tovarList[0]['idDiscount'].')';
