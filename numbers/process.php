<?php
$psw = $_POST['psw'];
$name = $_POST['name'];
echo "<table><tr><td>Submitted form data:<br><pre>[<br>&nbsp;&nbsp;&nbsp;&nbsp;name:\"".htmlspecialchars($_POST['name'])."\",<br>&nbsp;&nbsp;&nbsp;&nbsp;psw:hidden,<br>]</pre>";
echo "Please wait while the data is being processed.";
echo "<form action=level".$_POST['test']."/enter.php method=post>";
echo "<br>";
echo "<input type=hidden value='".$name.'\' name="name" />';
echo "<input type=hidden value='".$psw.'\' name="psw" />';
if ($psw == "password") {
	echo 'You are authorized. Press Next to start the quiz.</td><td></td></tr><tr><td><input type="reset" onclick="history.back(1);" value="< Back" /></td><td><input type=submit value="Next >" /></td></tr></form></table>';
} else {
	echo 'An incorrect password was entered. Please go back and correct it.</td><td></td></tr><tr><td><input type="reset" onclick="history.back(1);" value="< Back" /></td><td><input type=submit disabled value="Next >" /></td></tr></table>';
}
?>