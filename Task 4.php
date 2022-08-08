<?php 
//input
$inputs=array("Abc", "John", "cat", "Opera", "Noon","Tommmma");
//Sample output
//OperaAbccat

//Step1 Find Longest string
$longest_string="";
for($i=0;$i<count($inputs)-1;$i++)
{
	if(strlen($inputs[$i]) <= strlen($inputs[$i+1])) 
	{
		$longest_string=$inputs[$i+1];
	}
}
//step 2 Find Longest String End Value

$longest_string_end_value=$longest_string[-1];

//Final output 

echo $longest_string;
foreach($inputs as $input)
{
	if($input!=$longest_string)
	{
		if($longest_string_end_value==strtolower($input[0]))
		{
			$longest_string_end_value=$input[-1];
			 echo $input;
		}
	}
}
?>