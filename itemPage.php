<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["item1"] = array("ch001",12);
$_SESSION["favcolor"] = "green";
echo "Session variables are set.";
?>

</body>
</html>