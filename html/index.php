<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		  <title>Qual é o meu ip</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Start GoOglE AdSsS -->
<script data-ad-client="ca-pub-5136835636909979" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ------------------ -->
</head>






<body class="blurBg-false" style="background-color:#3a3838">




<br></br>
<center>
<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menu.css3prjhtml_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>	<!-- End css3menu.com HEAD section -->
<!-- Start css3menu.com BODY section -->


<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu" >


	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="http://www.hidra-network.xyz" style="height:25px;line-height:25px;">Home</a></li>
	<li class="topmenu"><a href="http://www.hidra-network.xyz" style="height:25px;line-height:25px;">Verificar IP</a></li>
	<li class="topmenu"><a href="http://www.hidra-network.xyz" style="height:25px;line-height:25px;">DNS</a></li>
	<li class="toplast"><a href="http://www.hidra-network.xyz" style="height:25px;line-height:25px;">Proxy</a></li>
</ul></center>
<!-- End css3menu.com BODY section -->


<br></br>


<!-- Start Formoid form-->

<link rel="stylesheet" href="html_files/formoid1/formoid-biz-red.css" type="text/css" />
<script type="text/javascript" src="html_files/formoid1/jquery.min.js"></script>
<form class="formoid-biz-red" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px" method="post"><div class="title"><h2 style="text-align: center;">Verificador de IP</h2></div>
	<div class="element-input"><label class="title"></label><br><input class="large" type="text" name="input" placeholder="Ex : google.com ou 192.168.0.1"/></div>


<br></br>




 <?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '256M');
ini_set('display_errors', 0);
ini_set('max_execution_time', 0);

if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
 
	
$filename = "count.txt";
$number = file_get_contents($filename); 
$file = fopen("count.txt", "r+") or die("Unable to open file!");
if (flock($file, LOCK_EX)) { 
    ftruncate($file, 0);
    fwrite($file, $number+1); 
    flock($file, LOCK_UN); 
} 
fclose($file);


function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip2 = getUserIpAddr();

$ip1 = $_SERVER['REMOTE_ADDR'];

if ($ip1 == $ip2){

	echo "<p>   IP : $ip1</p>";
	$ipLog = $ip1;

}else{

echo "<p>IP : $ip1 </p>";
echo "<p>IP Real : $ip2 </p>";

$ipLog = $ip2;

}

//$i = gethostbyname($_SERVER["HTTP_X_FORWARDED_FOR"]);
$z = gethostbyaddr ($_SERVER ['REMOTE_ADDR']);

//echo "<p>I: $i</p>";
echo "<p>DNS Reverso : $z</p>";


//	echo "<p>Olá...</p>";



$handle = fopen("log.txt", "a"); //open log file
foreach($_POST as $variable => $value) { //loop through POST vars
   fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "IP:$ipLog\n");
fclose($handle);






 ?>

<div class="submit"><input type="submit" value="Verificar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="html_files/formoid1/formoid-biz-red.js"></script>
<!-- Stop Formoid form-->







</body>

</html>

