<?php

echo'<font face=Ubuntu>';
function wordFilter($text)
{
    //string layout
    $ambilkata = $text;
    

    $ambilkata = str_replace('<div class="dtl">', '<div class="kotak">', $ambilkata);
    

    //string modifyurl
    $ambilkata = str_replace('<span> Diposting', '<span hidden>', $ambilkata);
    $ambilkata = str_replace('<span> Lihat', '<span hidden>', $ambilkata);
    $ambilkata = str_replace('<span> Rilis hari', '<span><font face=Consolas color=gold size=2>', $ambilkata);
    $ambilkata = str_replace('WIB </span>', 'WIB </span></font>', $ambilkata);
    $ambilkata = str_replace('pukul', '->', $ambilkata);
    $ambilkata = str_replace('<li>', '', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);
    $ambilkata = str_replace('<h3>Rilisan Terbaru</h3><ul>', '', $ambilkata);

    $ambilkata = str_replace('<div class="thumb">', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<a href="https://www.oploverz.in/', '<a href="/lib/get.php?id=', $ambilkata);
    return $ambilkata;
}



// page1
$curl = curl_init('https://www.oploverz.in/'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="lts">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
else 
    print "Not found"; 
 ?>
