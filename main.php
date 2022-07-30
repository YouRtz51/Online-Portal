<!--========================main======================== -->
<main id="main">
   <!--------- carousel here--------->
   <section class="carousel">
      <!-- Slider main container -->
      <div class="mt-3 swiper-container">
         <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
               <img class="img-fluid" src="https://source.unsplash.com/1600x400/?code,java">
            </div>
            <div class="swiper-slide">
               <img class="img-fluid" src="https://source.unsplash.com/1600x400/?fashion,clothes">
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </section>

   <!-- Topics Section here -->
   <section id="Topic">
      <hr>
      <h2 class="text-center text-success display-5">Browse Topics</h2>
      <div class="container flex-wrap mt-4 d-flex justify-content-around">
         <?php
         $sql = "SELECT * FROM `_topics`";
         $result = mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="m-3 card" style="width: 18rem;">
            <img src="https://source.unsplash.com/400x300/?design,' . $row["Topic_name"] . '" class="card-img-top" alt="' . $row["Topic_name"] . '">
            <div class="card-body">
               <h5 class="card-title">' . $row["Topic_name"] . '</h5>
               <p class="card-text">' . substr($row["Topic_desc"], 0, 80) . '....' . '</p>
               <a href="topic.php?Topic_no='.$row["Topic_no"].'" class="btn btn-success">Read More...</a>
            </div>
            </div>
             ';
         }
         ?>
      </div>
   </section>

</main>
<!-- .main -->