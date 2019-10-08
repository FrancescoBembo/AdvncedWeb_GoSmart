<?php
include "header.php";
?>

<div class="site-blocks-cover" style="background-image: url(images/Webp.net-resizeimage.jpg);" data-aos="fade">
  <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
      <div class="col-md-5 text-md-left pt-5 pt-md-0">
        <h1 class="mb-2" style="color: white">Finding Your Perfect Devices</h1>
        <div class="intro-text text-md-left">
          <p class="mb-4" style="color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
          <p>
            <a href="shop.php" class="btn btn-sm btn-light">Shop Now</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section site-section-sm site-blocks-1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
          <span class="icon-truck"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">Free Shipping</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
          <span class="icon-refresh2"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">Free Returns</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
          <span class="icon-help"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">Customer Support</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Featured Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" data-aos="zoom-in">
        <div class="nonloop-block-3 owl-carousel">
          <div class="item">
            <div class="block-4 text-center">
              <figure class="block-4-image">
                <?php
                $sql = "SELECT * FROM products WHERE p_id = 8";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                echo '
                <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>';
                ?>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-4 text-center">
              <figure class="block-4-image">
                <?php
                $sql = "SELECT * FROM products WHERE p_id = 15";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                echo '
                <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>';
                ?>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-4 text-center">
              <figure class="block-4-image">
                <?php
                $sql = "SELECT * FROM products WHERE p_id = 20";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                echo '
                <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>';
                ?>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-4 text-center">
              <figure class="block-4-image">
                <?php
                $sql = "SELECT * FROM products WHERE p_id = 30";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                echo '
                <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>';
                ?>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-4 text-center">
              <figure class="block-4-image">
                <?php
                $sql = "SELECT * FROM products WHERE p_id = 40";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                echo '
                <a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
                <p class="mb-0">'.$row["p_brand"].'</p>
                <p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section block-8">
  <div class="container">
    <div class="row justify-content-center  mb-5">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Big Sale!</h2>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 mb-5" data-aos="fade-right">
        <?php
        $sql = "SELECT * FROM image WHERE image_id = 10";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
        echo '<img src="'.$row["image"].'" alt="Image placeholder" class="img-fluid rounded"></a>';
        ?>
      </div>
      <div class="col-md-12 col-lg-5 text-center pl-md-5" data-aos="fade-left">
        <h2>50% less in all items</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
        <p><a href="shop.php" class="btn btn-outline-primary btn-sm">Shop Now</a></p>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>
