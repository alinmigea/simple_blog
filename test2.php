<?php
$people = array(
'Jason' => array(
'gender' => 'male',
'hair' => 'brown'
),
'Carly' => array(
'gender' => 'female',
'hair' => 'blonde'
)
);
foreach($people as $name => $person) {
foreach($person as $key => $value) {
echo "$name's $key is $value. <br />";
}
}
foreach ($people as $name => $person){
	echo "$name is {$person['gender']} <br />";
}
?>



<br />
<?php
$day = date('w');
switch($day)
{
case '0':
	echo "It's Sunday!";
	break;
case '1':
	echo "It's Monday!";
	break;
case '2':
	echo "It's Tuesday!";
	break;
case '3':
	echo "It's Wednesday!";
	break;
case '4':
	echo "It's Thursday!";
	break;
case '5':
	echo "Woohoo! It's Friday!";
	break;
case '6':
	echo "It's Saturday!";
	break;
default:
	echo "That's no day I recognize...";
	break;
}
//include_once 'extras.php';
//$num = "Alin";
//echo '<br>ce faci $num ', $num; 	//nu extinde variabila
//echo "<br>ce faci $bar ", $bar;		//extinde variabila
?>


<?php
$var = 0;
include_once 'extras.php';
echo $var, "<br />";
include 'extras.php';
echo $var, "<br />";
?>