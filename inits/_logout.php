<?php include '_connect.php'; ?>
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["logged_in"]);
session_destroy();
header('location:/feat/Index.php?logout=true');
exit();
?>
