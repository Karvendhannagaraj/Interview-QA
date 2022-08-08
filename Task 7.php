<?php 
$string="a1b2c3n5hi9";
//OutPut : abbcccnnnnniiiiiiiii
//Print the letters corresponding to the follwing numbers for the letters
$inputs=str_split($string);
foreach($inputs as $key=>$input)
{
  if($input>=0 and $input <=9)
  {
    for($i=0; $i<$input;$i++)
    {
      echo $inputs[$key-1];
    }
  }
}
?>