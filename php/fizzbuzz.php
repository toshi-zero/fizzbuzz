<?
$ret_array = array();
for($i=1; $i <= $argv[1]; $i++) {
	if(isFizz($i) && isBuzz($i)) {
		$ret_array[] = "fizzbuzz";
	} else if (isBuzz($i)) {
		$ret_array[] = "buzz";
	} else if (isFizz($i)) {
		$ret_array[] = "fizz";
	} else {
		$ret_array[] = $i;
	}
}
print implode(", ", $ret_array);

function isFizz($num) {
	if ($num % 3 == 0) {
		return true;
	}
	return false;
}

function isBuzz($num) {
	if($num % 5 == 0) {
		return true;
	}
	return false;
}

?>