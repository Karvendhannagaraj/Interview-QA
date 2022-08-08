<?php
$inputs="((abc)((de))";

function replace($strings,$str_replace,$str_replace_by)
{
	$strarray=explode($str_replace,$strings);
	$impolde=implode($str_replace_by,$strarray);
	return $impolde;
}

 $first=replace("((abc)((de))","((","(");
 $second=replace($first,"))",")");
 echo $second;
?>