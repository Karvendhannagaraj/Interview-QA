<?php
//output=1 8 3 6 5 4 7 2 9  
$inputs=array(2,3,6,7,1,8,9,5,4,11,10);
$even_array=array();
$odd_array=array();
foreach($inputs as $input)
{
   if($input%2==0)
   {
	   $odd_array[]=$input;
     
   }
   else
   {
     $even_array[]=$input;
   }
}

// even_array asending order Order sort
for($i=0;$i<count($even_array);$i++)
{
	for($j=0;$j<count($even_array)-1;$j++)
	{
		if($even_array[$j]>$even_array[$j+1])
		{
			$change=$even_array[$j+1];
			$even_array[$j+1]=$even_array[$j];
			$even_array[$j]=$change;
		}
	}
}

// odd_array ascending Order sort
for($i=0;$i<count($odd_array);$i++)
{
	for($j=0;$j<count($odd_array)-1;$j++)
	{
		if($odd_array[$j]<$odd_array[$j+1])
		{
			$change=$odd_array[$j+1];
			$odd_array[$j+1]=$odd_array[$j];
			$odd_array[$j]=$change;
		}
	}
}

if(count($even_array)>count($odd_array))
{
	
	foreach($even_array as $key=>$e)
	{
		if(count($odd_array)>$key)
		{
		   echo $e." ".$odd_array[$key]." ";
		}
		else
		{
			echo $e;
		}
	}
}
else
{
	foreach($odd_array as $key=>$o)
	{
		if(count($even_array)>$key)
		{
		   echo $even_array[$key]." ".$o." ";
		}
		else
		{
			echo $o;
		}
	}
}
?>