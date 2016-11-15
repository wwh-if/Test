<?php
function socketget($url) {
	$header = $body = "";
	//主机名
	$domain = parse_url($url, PHP_URL_HOST);
	//path路径
	$path = empty(parse_url($url, PHP_URL_PATH)) ? "/" :  parse_url($url, PHP_URL_PATH);
	$fp = fsockopen($domain, 80, $errno, $errstr, 30);
	if (!$fp) {
	    echo "$errstr ($errno)<br />\n";
	} else {		
		$out = "GET {$path} HTTP/1.1\r\n";
	    $out .= "Host: {$domain}\r\n";
	    $out .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0\r\n";
	    $out .= "Connection: Close\r\n\r\n";
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

$res = socketget("http://news.qq.com/a/20160817/017265.htm");
// var_dump($res);
file_put_contents("socket_header.txt", $res[0]);
file_put_contents("socket_boyd.txt", $res[1]);
?> 
