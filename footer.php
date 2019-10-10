<footer class="site-footer border-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="row">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">More</h3>
          </div>
          <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
              <li><a href="shop.php">Shop</a></li>
              <li><a href="cart.php">Shopping cart</a></li>
              <li><a href="wishlist.php">Wishlist</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="http://facebook.com" class="icon-facebook" style="font-size: 20px"></a></li>
                  <li><a href="http://instagram.com" class="icon-instagram" style="font-size: 20px"></a></li>
                  <li><a href="http://google.com" class="icon-google" style="font-size: 20px"></a></li>
                  <li><a href="http://twitter.com" class="icon-twitter" style="font-size: 20px"></a></li>
                  <li><a href="http://youtube.com" class="icon-youtube" style="font-size: 20px"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
        <h3 class="footer-heading mb-4">Promo</h3>
        <a href="#" class="block-6">
          <?php
          $sql = "SELECT * FROM image WHERE image_id = 1";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          echo '<img src="'.$row["image"].'" alt="Image placeholder" class="img-fluid rounded mb-4" height="100px" width="100px">';
          ?>
          <h3 class="font-weight-light  mb-0">Check out the promotion</h3>
          <p>Promo from October 15 &mdash; 25, 2019</p>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Contact Info</h3>
          <ul class="list-unstyled">
            <li class="address">120 Spencer St, Melbourne, VIC Australia 3000</li>
            <li class="phone"><a href="tel://61392392210">+61 3 92392210</a></li>
            <li class="email">info@ait.com</li>
          </ul>
        </div>

        <div class="block-7">
          <form action="#" method="post">
            <label for="email_subscribe" class="footer-heading">Subscribe</label>
            <div class="form-group">
              <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
              <input id="subscribe" type="submit" class="btn btn-sm btn-primary" value="Send" onclick="subscribeFunction()">
              <script>
                function subscribeFunction() {
                  alert("Thank you for your subscription!");
                }
              </script>
              <script>
                $(document).ready(function() {
                  $('#content').load('defaultShop.php');
                  $('div#filter form a').click(function() {
                    var page = $(this).attr('href');
                    $('#content').load(page + '.php');
                    return false;
                  });
                });
              </script>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

</body>
</html>