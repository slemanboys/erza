<title>opL scraper</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/lib/style.css">
<?php $start_time = microtime(true); ?>

<script type="text/javascript" src="/lib/rain.js"></script>
<style>
  body { 
   background: black url("/src/guild.png") no-repeat fixed center; 
 }
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
              _      
             | |     
   ___  _ __ | |     
  / _ \| '_ \| |     
 | (_) | |_) | |____ 
  \___/| .__/|______|
       | |            2019 - Sin.
       |_|           c0dename: erza
  
</pre></div>
<center>
<?php

echo '<font face=Consolas color=gold size=3>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';
?>



<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b>/home<b/></a>

<a href="/?chart" rel="nofollow" target="_blank"><b>schedule</b></a></div><br>
</font>




<?php
echo'<font color=gold>';
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

if(isset($_GET['x'])){

$babi = $_GET['x'];
$bangsat = 'https://www.oploverz.in/page/';
$kontol = $bangsat . $babi . '/'; // site.com/search?q="query" lo jadi ini dipecah jadi 2
$curl = curl_init($kontol); 

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


$tag = '/<div class="lts">(.*?)<div class="pagination">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo wordFilter($udah[0]);
else 
    print "error";
}



// usage http://localhost/authremote/antk.php?memek=12(etc.)
?>

<div class="page"><p>
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
<div>
<p>
<div class="intro">
<font color=crimson face=consolas size=2>

<b>&copy; Sin,</b>
(<a href="lib/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/erza</font>
</font>
</div>  