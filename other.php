<?php
require "header.php";
?>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
    <?php

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="other.php"><strong class="text-black">Other Brands</strong></a> </div>';
    } else {
      echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="other.php"><strong class="text-black">Other Brands</strong></a> </div>';
    }
    ?>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="row">
      <?php
      $sql = "SELECT * FROM other ORDER BY p_name ASC";
      $result = mysqli_query($link, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
        echo '
          <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="block-4 text-center border">
              <figure class="block-4-image">
                <a href="'.$row['p_link'].'"><img src="'.$row["p_image"].'" style="width:100%"></a>
              </figure>
              <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>
              </div>    
            </div>
          </div>';
          $x++;
        }
      }
      ?>
      </div>
    </div>
  </div>
</div>



<br><br>
<?php
require "footer.php";
?>