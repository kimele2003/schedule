<?php
session_start();
include("includes/headerintroduce.inc");
?>

<h1>Login</h1>
<form action = "handlerlogin.php" method="POST">
		Club Name: <br>
<input type = "text" name = "clubname"/><br><br>
Club Password: <br>
<input type = "text" name = "clubpassword"/><br><br>

<input type = "submit" value = "submit" /><br><br>


 		</form>

<?php include("includes/footer.inc"); ?>
