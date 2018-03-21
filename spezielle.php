<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = "&lt;p&gt;Text im Absatz mit&lt;br /&gt; Zeilenumbruch&lt;p&gt;";
echo html_entity_decode($a);

$tabelle = get_html_translation_table();
foreach ($tabelle as $schluessel => $wert) {
    echo htmlentities($schluessel) . "wird zu " . htmlentities($wert) . "<br />";
}