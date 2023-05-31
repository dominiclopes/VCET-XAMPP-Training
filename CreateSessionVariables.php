<?php
session_start();
?>

<html>

<body>

<?php
# Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

<br><a href="ViewSavedSessionVariables.php">View Saved Session Variables</a><br>

</body>


</html>