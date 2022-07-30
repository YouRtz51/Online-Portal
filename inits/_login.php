<?php include '_connect.php'; ?>
<?php
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM `users` WHERE user_email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash = $row["User_password"];

if (password_verify($pwd, $hash)) {
    session_start();
    $_SESSION["logged_in"]=true;
    $_SESSION["username"] = $row["User_name"];
    header("location:/feat/Index.php?login=true");
    exit();
} else {
    header("location:/feat/Index.php?login=false");
    exit();
};
?>

