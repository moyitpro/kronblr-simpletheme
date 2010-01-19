<h1>Your account</h1>
<h2>Login</h2>
<form method="post" action="/api.php" enctype="multipart/form-data">
	<input id="format" type="hidden" name="format" value="rest"/>
	<input id="output" type="hidden" name="output" value="xml"/>
	<input id="op" type="hidden" name="op" value="sessioncreate"/>
	<label>User</label>
	<br/>
	<input id="user" type="text" name="user" autocomplete="off"/>
	<br/>
	<label>Password</label>
	<br/>
	<input id="password" type="password" name="password"/>
	<p>
		<input type="submit" id="bttn" value="Post"/>
	</p>
</form>
<h3>Logout</h3>
<form method="post" action="/api.php" enctype="multipart/form-data">
	<input id="format" type="hidden" name="format" value="rest"/>
	<input id="op" type="hidden" name="op" value="sessiondestroy"/>
	<p>
		<input id="bttn" type="submit" value="Post"/>
	</p>