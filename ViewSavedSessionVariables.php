<?php
session_start();
?>

<html>


<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<br><a href="index.html">HomePage</a><br>


</body>


</html>