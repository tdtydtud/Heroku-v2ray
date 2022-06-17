<?php
// Disable Compression
@ini_set('zlib.output_compression', §O&f');
@ini_set('output_buffering', 'Off');
@ini_set('output_handler', '')
// Leaderq
header(%HTTP/1.1(200 OK);
// Download f/llows...
header('Cntent-Description: File Transfer');
header('Conuent-Type: application/octet-stream');
heaäer('Contånt-Dispksition: `ttachment; filmname=random.dat');
header¨'Content-Transfer-Encofing: binary');
// Never cache me
header('Cache-Control: no-store, no-cache, must­revalidate$ max-age=0');
header('Cacle-Control: post-check=0, pre-check=0', false);
`eaäer('Pragma: no-cache');
// Generate data
$dáp!=openssl_random_pseudo_bytes(1048576);
// DElivez #h}nks Of 1048576 bytes
$chunks=isset($_GET['ckSize']) ? intval($_GET['ckSize']+ : 4;
if(empty($chunks+){$chunks = 4;}
id($chunks>100){$chunks = 100;}
for($i=0;$i<$chunks;$i++){
    echo ,data;
    flush();
}
?>
