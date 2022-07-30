<?php include 'header.php'; ?>

<!-- Topics Section here -->
<section id="Topic">
    <hr>
    <h2 class="mb-5 text-center text-success display-5">Topic Discussion</h2>
    <div class="container">
        <?php
        $T_no = $_GET['Topic_no'];
        $sql = "SELECT * FROM `_topics` WHERE Topic_no=$T_no";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="container mb-4 card">
                <div class="row g-0">
                  <div class="col-md-4">
                      <img src="https://source.unsplash.com/400x300/?design,' . $row["Topic_name"] . '" class="card-img-top" alt="' . $row["Topic_name"] . '">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">' . $row["Topic_name"] . '</h5>
                      <p class="card-text">' . $row["Topic_desc"] . '</p>
                      <footer class="blockquote-footer">Powered By<cite title="Source Title">Feat</cite></footer>
                    </div>
                  </div>
                </div>
            </div>    
           ';
        };
        ?>
    </div>
</section>

<!-- Add comment section here -->
<?php include'comment.php'?>

<!-- comments appears here -->
<section class="container comments">
    <?php
    $T_no = $_GET['Topic_no'];
    $sql = "SELECT * FROM `_comments` WHERE Topic_no='$T_no'";
    $result = mysqli_query($conn, $sql);
    $rownum = mysqli_num_rows($result);
    echo '<hr><h5 class="mt-5 mb-5">Comments<span class="badge bg-secondary">' . $rownum . '</span></h5>';
    if (!$rownum == 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="mb-4 card">
             <div class="card-header">
             <span class="text-muted">Commented On ' . $row["Comment_time"] . ' </span>
             </div>
             <div class="card-body">
               <blockquote class="mb-0 blockquote">
                 <p class="text-danger">' . $row["Comment_name"] . '</p>
                 <h6 class="text-sm">' . $row["Comment_desc"] . '</h6>
                 <a class="text-success text-decoration-none" href="#">Reply</a>
               </blockquote>
             </div>
           </div>
             ';
        };
    };
    ?>
</section>


</main>
<!-- .main -->
<?php include 'footer.php'; ?>
<?php
/*
    $login = true;
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if ($login == true) {
        echo '
        <div class="mb-3">
            <label for="Email_addr" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email_addr" name="Comment_email" placeholder="Enter Your Email">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="comment" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <a "topic.php?Topic_no=' . $row["Topic_no"] . '"' . 'class="btn btn-success" type="submit">Add Your Comment</a>
        </div>
        ';

            $Email = $_GET['Comment_email'];
            $Comment = $GET['comment'];
            $sql = "INSERT INTO `_comments` (`Comment_name`, `Comment_desc`, `Topic_no`) VALUES ($Email,$Comment,$T_no);";
            $result = mysqli_query($conn, $sql);
            echo var_dump($result);







                    <a href="topic.php?Topic_no=' . $T_no. '"' . 'class="btn btn-success" type="submit">Add Your Comment</a>
*/
?>