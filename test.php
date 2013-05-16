<?php
	$nume = "Alin";
	$s = "ce mai" . " faci $nume? <br>";
	echo $s;
	$var = 2;
$foo = <<<EOD
This is a string created using heredoc syntax.
It can span multiple lines, use "quotes" without
escaping, and it'll allow $var too.
Special characters are still supported \n as well.
EOD;

echo $foo;

echo "<br >ce faci", " hello";

$cizma = array('gheata',4,'albastru');
echo "<br>am o ", $cizma[0], $cizma[1], " pe ",$cizma[2];
?>

<br>

<?php
$entry = array(
		'title' => 'Sample Title',
		'date' =>  2009,
		'author' => 'Jason',
		'body' => 'Today, I wrote a blog.'
);
echo "{$entry['author']} pe data de $entry[date] ", $entry['body'];
?>

<?php
$entry = array(
	'fruits' => array('ghilda', 'napsataa'),
	'persons' => array('name' => 'alin', 'age'=> 3)
);
echo $entry['fruits'][0], " ", $entry['persons']['name'];

$sir = array(
		'name' => 'Alin Migea',
		'age' => 21,
		'sex' => 'M'
		);

echo "<br> {$sir['name']} {$sir['age']} {$entry['persons']['age']} $s $var {$entry['fruits'][1]}";   //cel mai indicat la array-uri e sa punem {$entry['key']['key']}
?>

<?php printf('The total cost is $%.2f', 'string'); 
	print('alin <br>');
	printf('%s had a %.1f and Tom had a %.1f', 'alin', 'a', 4.1  );
	$pr = sprintf("%2.2f", 4.5);
	echo "<br> numarul: ", $pr;
?>

<br>
<?php
	$person = array(   //comment ce sa scriu
		'name' => 'Jason',
		'age' => 23
	);
	$age =& $person['age'];
	echo "perosna {$person['name']} si varsta {$person['age']} <br />";
	// Output the array before doing anything
	print_r($person);
	// Birthday! Add a year!
	++$age;
	// Output the array again to see the changes
	print_r($person);
?>



