<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"]= "blue";
print_r($_SESSION);
?>

</body>
</html>
