<section id="commentbox" style="max-width:576px;" class="container mt-5 mb-5 commentbox">
    <hr>
    <?php

    if (isset($_SESSION["logged_in"])) {
        $T_no = $_GET['Topic_no'];
        echo '
        <blockquote class="blockquote">
        <p class="mb-0">Start Your Discussion Now</p>
        </blockquote>
        <form class="p-3 border needs-validation border-dark border-1" action="inits/_comment_handle.php" method="GET" novalidate>
            <div class="form-row">
                <div class="mb-3">
                    <label for="username" class="form-label">Your Name</label>
                    <input type="text" name="username" class="form-control" id="username" required value="' . $_SESSION["username"] . '">
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Your Comment Here</label>
                    <textarea name="comment" class="form-control" id="comment" required></textarea>
                </div>
            </div>
            <input type="text" name="Topic_no" value="' . $T_no . '" style="visibility:hidden;">
            <button style="text-align:left; width:100%;" class="btn btn-danger" type="submit">Add Your Comment</button>
        </form>
           ';
    }else{
        echo '
        <div class="alert alert-secondary" role="alert">
            Please <a type="button" data-bs-toggle="modal" data-bs-target="#login_modal" class="alert-link">Login</a> to add Comments And Start Discussions.
        </div>
        <div class="alert alert-warning" role="alert">
            Any content that is excessively posted, repetitive, or untargeted, or content that promises users they will see something but instead directs them off site would be considered spam
        </div>
        '; 
    };
    ?>
</section>