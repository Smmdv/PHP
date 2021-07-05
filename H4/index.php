<?php
function celtofar($x) {
$output = ($x * 1.8) + 32;
return $output;
}

function deelbaar3($x) {
if ($x % 3 == 0) {
$output = True;
}
else {
$output = False;
}
return $output;
}
function rre($x)  {
    $output = strrev($x);
    return $output;
}
echo rre("hoi");