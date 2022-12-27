<?php
$arr=["B\$u\$i\$ld", "\$t\$\$h\$e", "N\$e\$x\$t", "E\$\$ra", "\$\$o\$f\$", "S\$\$of\$t\$wa\$r\$e", "De\$\$ve\$l\$op\$me\$n\$t"];

$arr=str_replace("$","",$arr);

$string= implode(' ', $arr);
echo strtoupper($string);

?>
