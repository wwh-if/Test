<?php

$musicTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Music>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<MusicUrl><![CDATA[%s]]></MusicUrl>
<HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
<ThumbMediaId><![CDATA[%s]]></ThumbMediaId>
</Music>
</xml>";
$resultStr = sprintf($musicTpl, $toUsername,$fromUsername, $time, $msgType, " ","http://www.ningping.top/%E9%99%AA%E4%BD%A0%E5%BA%A6%E8%BF%87%E6%BC%AB%E9%95%BF%E5%B2%81%E6%9C%88.mp3", " ",  "JdyJJSqXfCokf3cAuxZvooqml1B10KkOQDdCqcui76hPj14KfCu1jLHYKLwJqWe7");

var_dump($resultStr);