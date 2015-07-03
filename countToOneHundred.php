<?PHP

/**
 * Creates an array of the values from 1 to x.
 * There are 3 kinds of special values:
 * Multiples of 3 and 5 are replaced with 'three-five'.
 * Multiples of 3 are replaced with 'three'.
 * Multiples of 5 are replaced with 'five'.
 */
function countToX($countTo) {
	$countOutput = array();

	for ($i=1; $i<=$countTo; $i++) {
		$multipleOfThree = !($i % 3);
		$multipleOfFive = !($i % 5);

		if ($multipleOfThree && $multipleOfFive)
			$countOutput[] = "three-five";
		elseif ($multipleOfThree)
			$countOutput[] = "three";
		elseif ($multipleOfFive)
			$countOutput[] = "five";
		else
			$countOutput[] = "$i";
	}

	return $countOutput;
}

$countOutput = countToX(100);
foreach ($countOutput as $value)
	echo $value . PHP_EOL;
