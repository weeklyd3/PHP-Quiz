<h3>If this is your first time visiting the 
quiz section, it is recommended that you 
select the sample quiz first to see what 
entering answers is like. <small><a href="#" onclick="this.outerHTML='The password is <code>'+window.atob('cGFzc3dvcmQ=')+'</code>';">reveal password</a></small></h3>
<form action="process.php" method="post">
<table>
<tr><td>
<input name="name" type="text" placeholder="Your Name" /></td><td>Enter name (optional)</td></tr>
<tr><td><input name="psw" type="password" placeholder="Password" required="required" /></td><td>Enter password</td></tr>
<tr><td><select name="test" required="required" value="Choose"><option selected="selected" disabled="disabled" style="display:none;">No test</option><option value="1">First Test (Demo!)</option><option value="2">Second Test (Basic Linear Equations)</option><option value="3">Harder Equations</option></select></td><td>Choose quiz</td></tr>
<tr>
<td><input type="reset" value="Clear Form" /></td>
<td><input type="submit" value="Next >" /></td></tr></table></form>
<pre>
A few notes:
This syncs with a <a href="https://github.com/weeklyd3/PHP-Quiz">repository on GitHub.</a> 

Issues should be reported there.

PRs are welcomed. Just create one and
I'll do my best to merge it.
</pre>