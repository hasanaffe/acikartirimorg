<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 'Dies ist Text a';
$b = 'Dies ist Text b';
$hilf;
$tausch;

$hilf = $a;
$tausch = $b;
$a = $tausch;
$b = $hilf;

echo 'Dies ist $hilf: ' . $hilf . '<br />';
echo 'Dies ist $b: ' . $b . '<br />';
echo 'Dies ist $a: ' . $a . '<br />';
?>