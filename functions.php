
<?php
function divide ($x, $y) {
	$z = $x / $y;
	return $z;

}


echo "60 / 128 = " . divide(60, 128 ) . " Gallons. <br>";
echo "95 / 128 = " . divide(95, 128) . " Gallons.<br>";
echo "578 / 128 = " . divide(578, 128) . " Gallons.<br><br>";


function displayMsg() {
	echo "Welcome to my PHP functions page<br>";
	echo "My name is Ryan<br>";
	echo "and I'm a web developer in training!<br><br>";
}

displayMsg();

$games [0] = "PUBG";
$games [1] = "Battlefield 4";
$games [2] = "Forza Motorsport 6";

echo "I play " . $games[0] . ", " . $games[1] . ", " . $games[2] . ". ";
