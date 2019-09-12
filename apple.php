<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Apple Homepod Black</div>
            <div class="panel-body">
            <a href="item.php?id=14">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM apple WHERE image_id = 1";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Apple Homepod Black
            <a href="item.php?id=14" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Apple Homepod White</div>
            <div class="panel-body">
            <a href="item.php?id=53">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM apple WHERE image_id = 2";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Apple Homepod White
            <a href="item.php?id=53" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Apple TV</div>
            <div class="panel-body">
            <a href="item.php?id=15">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM apple WHERE image_id = 3";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Apple TV
            <a href="item.php?id=15" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
      </div>
    </div><br><br>
<?php
require "footer.php";
?>