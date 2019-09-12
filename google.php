<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" id = 1>Google ChromeCast</div>
            <div class="panel-body">
            <a href="item.php?id=6">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM google WHERE image_id = 1";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Google ChromeCast
            <a href="item.php?id=6" style="float:right;">Detail...</a>
            </div>
          <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Google Home Hub Max</div>
            <div class="panel-body">
            <a href="item.php?id=4">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM google WHERE image_id = 2";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Google Home Hub Max
            <a href="item.php?id=4" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Google Home Hub</div>
            <div class="panel-body">
            <a href="item.php?id=3">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM google WHERE image_id = 3";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Google Home Hub
            <a href="item.php?id=3" style="float:right;">Detail...</a>
            </div>
          <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
      </div><br><br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Google Home Max</div>
            <div class="panel-body">
            <a href="item.php?id=5">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM google WHERE image_id = 4";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Google Home Max
            <a href="item.php?id=5" style="float:right;">Detail...</a>
            </div>
          <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Google Home Mini</div>
            <div class="panel-body">
            <a href="item.php?id=1">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM google WHERE image_id = 5";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Google Home Mini
            <a href="item.php?id=1" style="float:right;">Detail...</a>
            </div>
          <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
              <div class="panel panel-default">
                <div class="panel-heading">Google Home</div>
                <div class="panel-body">
                <a href="item.php?id=2">
                  <?php
                  $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
                  $sql = "SELECT * FROM google WHERE image_id = 6";
                  $result = mysqli_query($db, $sql);
                  $row = mysqli_fetch_array($result);
                  echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
                  ?></a>
                </div>
                <div class="panel-footer">Google Home
                <a href="item.php?id=2" style="float:right;">Detail...</a>
                </div>
              <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
              </div><br><br>
            </div>
        </div><br><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">Google ChromeCast Audio</div>
                    <div class="panel-body">
                    <a href="item.php?id=7">
                      <?php
                      $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
                      $sql = "SELECT * FROM google WHERE image_id = 7";
                      $result = mysqli_query($db, $sql);
                      $row = mysqli_fetch_array($result);
                      echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
                      ?></a>
                    </div>
                    <div class="panel-footer">Google ChromeCast Audio
                    <a href="item.php?id=7" style="float:right;">Detail...</a>
                    </div>
                  <button style='float:right;' class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
                  </div><br><br>
                </div>
            </div><br><br>
              </div>
            </div>
<?php
require "footer.php";
?>