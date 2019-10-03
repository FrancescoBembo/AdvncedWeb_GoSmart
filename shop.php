<?php
include "header.php";
?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>';
        } else {
          echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>';
        }
        ?>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <?php
                    $x = 1;
                    while($x < 54){
                      $sql = "SELECT * FROM products WHERE p_id = $x";
                      $result = mysqli_query($db, $sql);
                      $row = mysqli_fetch_array($result);
                      echo '
                      <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                          <figure class="block-4-image">
                            <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
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
              ?>

            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Amazon</span> <span class="text-black ml-auto">(6)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Apple</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Google</span> <span class="text-black ml-auto">(7)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Other</span> <span class="text-black ml-auto">(35+)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Type</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="google" class="mr-2 mt-1"> <span class="text-black">Google</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="apple" class="mr-2 mt-1"> <span class="text-black">Apple</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="amazon" class="mr-2 mt-1"> <span class="text-black">Amazon</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="other" class="mr-2 mt-1"> <span class="text-black">Other</span>
                </label>
              </div>

              

            </div>
          </div>
        </div>
        
      </div>
    </div>

<?php
require "footer.php";
?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>