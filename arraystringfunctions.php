<?php
//Array String Functions

//addslashes
	$str = "Is your name O'Reilly?";
	echo addslashes($str);
	echo "<br>";

//chr
$str = chr(046);
echo("You $str me forever!");
echo "<br>";

//chunk split

$str = "GoodMorninghowareyou";
echo chunk_split($str, 6) ."\n";
echo "<br>";

//countchars: there are different modes from 1 to x that give you different info about the string.
$str = "Hello World!";
echo count_chars($str,4);
echo "<br>";
//echo

echo 'Hello World';
echo "<br>";


//explode

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo "<br>";

//htmlentitites

$str = "Jane & 'Tarzan'";
echo htmlentities($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlentities($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlentities($str, ENT_NOQUOTES); // Does not convert any quotes

echo "<br>";

//html special char decode (opposite of htmlspecialchars)

$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

//implode
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);
echo $comma_separated;
echo "<br>";

//md5-hashing please do not use for password!
$str = "Hello";
echo md5($str);


 echo "<br>";

//rtrim put a space into the function

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);


echo "<br>";


//stringgetCSV parse a CSV string into an array


//strip_tags

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo "<br>";


//strpos
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
echo "<br>";

//strlen

echo strlen("Hello");
echo "<br>";



?>
