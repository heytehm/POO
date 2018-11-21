<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 20/11/2018
 * Time: 21:25
 */

function Divide($x,$y)
{
    if ($y == 0) {
        throw new Exception("div par zero impossible!!!!!!");
    }
    return $x / $y;
}
