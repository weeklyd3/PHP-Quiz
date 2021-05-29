<h3>If this is your first time visiting the 
quiz section, it is recommended that you 
select the sample quiz first to see what 
entering answers is like.</h3>
<form action="process.php" method="post">
<table>
<tr><td>
<input name="name" type="text" placeholder="Your Name" /></td><td>Enter name (optional)</td></tr>
<tr><td><input name="psw" type="password" placeholder="Password" required="required" /></td><td>Enter password</td></tr>
<tr><td><select name="test" required="required" value="Choose"><option selected="selected" disabled="disabled" style="display:none;">No test</option><option value="1">First Test (Demo!)</option><option value="2">Second Test (Basic Linear Equations)</option></select></td><td>Choose quiz</td></tr>
<tr>
<td><input type="reset" value="Clear Form" /></td>
<td><input type="submit" value="Next >" /></td></tr></table></form>