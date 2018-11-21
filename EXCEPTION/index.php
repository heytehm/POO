<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 20/11/2018
 * Time: 21:28
 */
include 'POO_EXCEPTION1.php';
include 'POO_EXCEPTION2.php';
try {
 echo  Divide(4,0).'<br>';

} catch (Exception $e) {
    echo $e->getMessage();

}
echo '<br>';

try {
    echo Sum  (4,'a').'<br>';

} catch (Exception $e) {
    echo $e->getMessage();

}