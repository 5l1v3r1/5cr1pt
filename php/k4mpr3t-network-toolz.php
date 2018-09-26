#!/usr/bin/php -q

# k4mpr3t Network Toolz
# September 2018
# Thanks to jgamblin & s1kx

<?php

function Get($url, $ip) {
	$rs = file_get_contents($url.$ip);
	return $rs ;
}

function Put($q) {
	echo $q;
	$f = fopen('php://stdin', 'r');
	while ($line = fgets($f)) {
		return $line;
	}
}

begin:
echo "k4mpr3t Network Toolz \n";
echo "--------------------- \n";
echo "1. MTR Traceroute API \n";
echo "2. on-line Test Ping API \n";
echo "3. DNS Lookup API \n";
echo "4. Reverse DNS Lookup API \n";
echo "5. Whois Lookup API \n";
echo "6. GeoIP Lookup API \n";
echo "7. Reverse IP Lookup \n";
echo "8. HTTP Headers \n";
echo "9. Page Links \n";
echo "0. Exit \n";
echo PHP_EOL;

$what = Put("How do you do ? ");

if ($what == 0) {
	echo "Thank you \m/";
	exit;
}

$api = array(
	1 => "https://api.hackertarget.com/mtr/?q=",
	2 => "https://api.hackertarget.com/nping/?q=",
	3 => "https://api.hackertarget.com/dnslookup/?q=",
	4 => "https://api.hackertarget.com/reversedns/?q=",
	5 => "https://api.hackertarget.com/whois/?q=",
	6 => "https://api.hackertarget.com/geoip/?q=",
	7 => "https://api.hackertarget.com/reverseip/?q=",
	8 => "https://api.hackertarget.com/httpheaders/?q=",
	9 => "https://api.hackertarget.com/pagelinks/?q=",
);

$ip = Put("Just give me an IP/Domain : ");
echo Get($api[(int)$what], $ip);
echo PHP_EOL;

goto begin;

?>
