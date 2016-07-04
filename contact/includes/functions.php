<?php
function ValidateEmail($value)
{

	$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
	if($value == '') { 
		return false;
	} else {
		$string = preg_replace($regex, '', $value);
	}

	return empty($string) ? true : false;
}
function ValidatePhone($value)
{
	//validation for phone

  $re1='(\\d)';	# Any Single Digit 1
  $re2='(\\d)';	# Any Single Digit 2
  $re3='(\\d)';	# Any Single Digit 3
  $re4='(-)';	# Any Single Character 1
  $re5='(\\d)';	# Any Single Digit 4
  $re6='(\\d)';	# Any Single Digit 5
  $re7='(\\d)';	# Any Single Digit 6
  $re8='(-)';	# Any Single Character 2
  $re9='(\\d)';	# Any Single Digit 7
  $re10='(\\d)';	# Any Single Digit 8
  $re11='(\\d)';	# Any Single Digit 9
  $re12='(\\d)';	# Any Single Digit 10

  if ($c=preg_match_all ("/".$re1.$re2.$re3.$re4.$re5.$re6.$re7.$re8.$re9.$re10.$re11.$re12."/is", $value, $matches))
  {
     return true;
  }else{
  	return false;
  }

}
?>