<?php 

$input="2 3 2 2 4 5 5";
$split=explode(' ',$input);
$sets=array();
foreach($split as $s)
{
    if(array_key_exists($s,$sets))
	{
	   $sets[$s]=$sets[$s]+1;
	}
	else
	{
	  $sets[$s]=1;
	}
}
foreach($sets as $key=>$s)
{
	if(end($sets)==$s)
	{
      echo $key.'('.$s.')';
	}
	else
	{
		 echo $key.'('.$s.')'.',';
	}
}

?>