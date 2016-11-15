<?php
function socketpost($url, $data = []) {
	$header = $body = "";
	//主机名
	$domain = parse_url($url, PHP_URL_HOST);
	//path路径
	$path = empty(parse_url($url, PHP_URL_PATH)) ? "/" :  parse_url($url, PHP_URL_PATH);
	$query = http_build_query($data);
	$fp = fsockopen($domain, 80, $errno, $errstr, 30);
	if (!$fp) {
	    echo "$errstr ($errno)<br />\n";
	} else {		
		$out = "POST {$path} HTTP/1.1\r\n";
	    $out .= "Host: {$domain}\r\n";
	    $out .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0\r\n";
	    $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
	    $out .= "Content-Length: ". strlen($query) . "\r\n";
	    $out .= "Connection: Close\r\n\r\n";
	    $out .= $query;
	    // $out = "";
	    fwrite($fp, $out);
	    $body_start = false;
	    while (!feof($fp)) {
	        //通过判断条件，把每一行的数据追加到header或者body
	        $line = fgets($fp);
	        if ($body_start == true) {
	        	$body .= $line;      	
	        } else {
	        	$header .= $line;
		        if ($line == "\r\n" || $line == "\n") {
		    		$body_start = true;
		    	}
	        }       
	    }
	    fclose($fp);
	    return [$header, $body];
	}
}

// $res = socketpost("http://localhost/day6-3/post.php", ['username' => 'abcd', 'password' => '1234']);
$res = socketpost("http://www.bttiantang.com/download3.php", ['action' => 'downlaod', 'id' => '28141', 'uhash' => 'f3e2324682875fc075d5357b']);
// var_dump($res);
file_put_contents("socket_header.txt", $res[0]);
// file_put_contents("socket_boyd.txt", $res[1]);
file_put_contents("Xzhanjing.torrent", $res[1]);
?> 
