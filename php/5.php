<?php
/*
	90 and 90 above 	A+

	80 and 90 less 		A

	60 and 80 less 		B

	40 and 60 less 		C

	40 less 			Fail

*/

$a = 38;

if($a >= 90)
{
	echo "Your Grade is : A+";
}
elseif($a < 90 &&  $a >= 80)
{
	echo "Your Grade is : A";

}
elseif($a < 80 && $a >=60)
{
	echo "Your Grade is : B";
}
elseif($a < 60 && $a >= 40)
{
	echo "Your Grade is : C";
}
else
{
	echo "You are Fail";
}


?>