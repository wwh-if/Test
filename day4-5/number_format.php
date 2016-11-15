<?php
$money = 1123400567.128;
print number_format($money, 2) . "\r\n";
print number_format($money, 2, "。", "，") . "\r\n";
print number_format($money, 2, ".", ",") . "\r\n";