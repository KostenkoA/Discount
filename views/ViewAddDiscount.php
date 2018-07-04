<h1>Add discount date</h1>
<?php
require_once('./core/functions.php');
?>

<form action = './controllers/ControllerActionAddDiscount.php' method = 'post'>
    Name of product:<?=createSelect('id',$tovarList);?><br><br>
    Date start: <input type='date' name='startDiscount'><br><br>
    Date end: <input type='date' name='endDiscount'><br><br>
    New price: <input type='number' name='newPrice'><br><br>
    <input type='submit' >
</form>
