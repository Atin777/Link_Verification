$url;

$pre1 = substr($url, 0, 7);

$pre2 = substr($url, 0, 8);

$pre3 = substr($url, 7, 4);

$pre4 = substr($url, 8, 4);

$flag1 = 0;

$flag2 = 0;

if($pre1 != 'http://' && $pre2 != 'https://'){
	$flag1 = 1;
}

if($pre3 != 'www.' && $pre4 != 'www.'){
	$flag2 = 1;
}

if(($flag1 == 1) || ($flag2 == 1)){
	return ['company_url', 'Invalid URL'];
}
