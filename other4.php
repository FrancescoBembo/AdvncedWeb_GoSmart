<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Yale Assure Lock SL Digital Deadbolt</div>
            <div class="panel-body">
            <a href="item.php?id=52">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 28";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Yale Assure Lock SL Digital Deadbolt
            <a href="item.php?id=52" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Eve Power Sensor Switch</div>
            <div class="panel-body">
            <a href="item.php?id=32">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 29";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Eve Power Sensor Switch
            <a href="item.php?id=32" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Eve Motion Sensor</div>
            <div class="panel-body">
            <a href="item.php?id=33">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 30";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Eve Motion Sensor
            <a href="item.php?id=33" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Eve Connected Button</div>
            <div class="panel-body">
            <a href="item.php?id=34">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 31";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Eve Connected Button
            <a href="item.php?id=34" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Lenovo Smart Bulb</div>
            <div class="panel-body">
            <a href="item.php?id=44">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 32";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Lenovo Smart Bulb
            <a href="item.php?id=44" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Lifx Smart Strip</div>
            <div class="panel-body">
            <a href="item.php?id=38">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 33";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Lifx Smart Strip
            <a href="item.php?id=38" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Lifx Tile Kit</div>
            <div class="panel-body">
            <a href="item.php?id=40">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 34";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Lifx Tile Kit
            <a href="item.php?id=40" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Nanoleaf Rythm</div>
            <div class="panel-body">
            <a href="item.php?id=42">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 35";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Nanoleaf Rythm
            <a href="oitem.php?id=42" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
      </div>
      <div class="pagination">
        <a href="other3.php">&laquo;</a>
        <a class="" href="other.php">1</a>
        <a class="" href="other2.php">2</a>
        <a class="" href="other3.php">3</a>
        <a class="active" href="other4.php">4</a>
        <a class="" href="#">&raquo;</a>
    </div>
    </div><br><br>
<?php
require "footer.php";
?>