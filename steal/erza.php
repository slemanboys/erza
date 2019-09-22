<?php

$url = file_get_contents('http://opl.test');
function wordFilter($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<a href="/lib/get.php?', '<a href="http://opl.test/lib/get.php?', $ambilkata);
    
    return $ambilkata;
}

echo wordFilter($url); 