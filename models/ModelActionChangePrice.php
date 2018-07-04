<?php
$query = 'SELECT newPrice, MIN (intervalDiscount)
              FROM datescondition
              WHERE startDiscount < '.$testDate->getTimestamp().' AND endDiscount > '.$testDate->getTimestamp().'
              GROUP BY newPrice';
