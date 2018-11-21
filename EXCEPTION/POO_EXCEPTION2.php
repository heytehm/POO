<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 20/11/2018
 * Time: 21:25
 */

function Sum ($x,$y){
   if( !is_numeric($x)||!is_numeric($y)){
       throw new Exception('il faut tapper un number');
   }
   return $x+$y;
}