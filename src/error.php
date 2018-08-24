<?php

define('version', '1.0');


function foo_($a, $b = null)
{
    $camel_case = version;

    $a = FALSE;$b_1 = Null;

    $c=3;

    echo implode(DIRECTORY_SEPARATOR, [$camel_case, $a, $b, $c]);
}