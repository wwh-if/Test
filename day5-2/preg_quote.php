<?php
	$textbody = "This book is *very* difficult to find.";
	$word = "*very*";
	print preg_quote($word);
	print "\r\n";
	$textbody = preg_replace ("/" . preg_quote($word) . "/",
                          "<i>" . $word . "</i>",
                          $textbody);
	print $textbody;

?>