<?php include '_connect.php'; ?>
<?php 
// query for adding comment
if (isset($_GET['username']) && isset($_GET['comment'])) {
    $T_no = $_GET['Topic_no'];
    $username = $_GET['username'];
    $comment = $_GET['comment']; 
    $sql = "INSERT INTO `_comments` (`Comment_name`, `Comment_desc`, `Topic_no`) VALUES ('$username', '$comment', '$T_no');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:/feat/topic.php?comment_added=true&Topic_no='.$T_no.'');
        } else {
        header('location:/feat/topic.php?comment_added=false&Topic_no='.$T_no.'');
    };
};
?>
