<form method='POST'>
        <label for="username">Username:</input>
        <input type='text' name='username'></input>
        <br>
        <label for="password">Password:</input>
        <input type='password' name='password'></input>
        <br>
        <input type='submit' name='submit' value='Submit' />
</form>

<div id="splash-message">

<?php
	$s_confirm = $_SESSION["confirmation"]; 
        $p_confirm  = $_POST['confirmation'];

        if ($_POST['username'] == 'host' && $_POST['password'] == 'pass' && $s_confirm == $p_confirm) {
                print "<h3>Access Granted</h3>";
        } else {
                print "<h3>Access Denied</h3>";
        }
?>
</div>