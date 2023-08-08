<?php
function pre($item)
{
    echo "
    <pre>";
    print_r($item);
    echo "</pre>";
}

function base_url($arg = NULL)
{
    $base = 'http://localhost/Shubham/web1/';
    return empty($arg) ? $base : $base . $arg;
}