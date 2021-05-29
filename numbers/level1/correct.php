<?php
$first = $_POST['1st'];
$second = $_POST['2nd'];
$third = $_POST['3rd'];
$fourth = $_POST['4th'];
$fifth = $_POST['5th'];
echo "<h1>Correcting Answers:</h1>";
echo "Problem 1: ".htmlspecialchars($first);
echo "<br>Problem 2: ".htmlspecialchars($second);
echo "<br>Problem 3: ".htmlspecialchars($third);
echo "<br>Problem 4: ".htmlspecialchars($fourth);
echo "<br>Problem 5: ".htmlspecialchars($fifth);
echo "<br>";
$right = "";
if ($first == "9") {
	echo "Problem 1 correct. ";
	$right = $right . "|";
}
if ($second == "9") {
	echo "Problem 2 correct. ";
	$right = $right . "|";
}
if ($third == "13") {
	echo "Problem 3 correct. ";
	$right = $right . "|";
}
if ($fourth == "9") {
	echo "Problem 4 correct. ";
	$right = $right . "|";
}
if ($fifth == "3") {
	echo "Problem 5 correct. ";
	$right = $right . "|";
}
echo "Good job! You got ".strlen($right)." problem(s) correct.";
echo "<br><br>Answers: 9, 9, 13, 9, and 3.";
echo '<br><br><form action="../level2/enter.php" method="post">';
echo '<input type="submit" value="Next Level >" />';
?>