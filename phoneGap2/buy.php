<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Owner
 * Date: 5/28/14
 * Time: 2:40 PM
 * To change this template use File | Settings | File Templates.
 */

$form = <<<END_OF_FORM

    <form method=post action="purchase.php?">
        Name: <input type="text" name="name" /><br/>
        Address: <input type="address" name="address" /><br/>
        <input type="submit" name="submit" value="Submit Order" />
    </form>

END_OF_FORM;

echo json_encode( $form );


