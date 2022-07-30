<?php include '_connect.php'; ?>
<?php
$user = $_POST['username'];


if($verify==true){
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO `users`(`User_name`, `User_email`, `User_password`) VALUES ('$user','$email','$hash')";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:/feat/Index.php?signup=true");
    exit();
}else{
    header("location:/feat/Index.php?signup=false");
    exit();
};
};
?>

