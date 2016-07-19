<?php
// parameter post
$data = array(
    'useruser' => '140441020023',
    'pwdpwd' => 'pass123',
    'login' => 'Login+System'
);
// parameter curl header
$headers = array();
$headers[] = '*/*';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Host: mhs.politekniklp3i-jkt.ac.id';
$headers[] = 'Referer: https://mhs.politekniklp3i-jkt.ac.id';
$headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0';

// url post
$url = 'https://mhs.politekniklp3i-jkt.ac.id/cekucel.php';

$ch = curl_init($url);
// bikin query 
$postString = http_build_query($data, '', '&');

// config CURL
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// store cookie 
curl_setopt($ch, CURLOPT_COOKIEJAR, 'a.txt');
// ambil cookie
curl_setopt($ch, CURLOPT_COOKIEFILE, 'a.txt');
// bypass ssl error
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//response dari POST request
$response = curl_exec($ch);
curl_close($ch);

print_r($response);
?>