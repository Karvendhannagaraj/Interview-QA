<?php 
$inputs="uvwxyz";
$array="aeiou";
$split=str_split($array);
$str_a=array();
$str_rev=array();
$result=0;
foreach(str_split($inputs) as $input)
{
	if(in_array($input,$split))
	{
		 $str_a[]=$input;
	}
}
for($i=count($str_a)-1;$i>=0;$i--)
{
	$str_rev[]=$str_a[$i];
}
for($i=0;$i<count($str_a);$i++)
{
	$result=($str_a[$i]==$str_rev[$i])? 1: 0;
}

echo ($result==0) ?  "no" : "yes";
?>