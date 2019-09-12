<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Nest Indoor Camera</div>
            <div class="panel-body">
            <a href="item.php?id=47">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 10";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Nest Indoor Camera
            <a href="item.php?id=47" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Nest Protect Smoke Alarm</div>
            <div class="panel-body">
            <a href="item.php?id=48">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 11";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Nest Protect Smoke Alarm
            <a href="item.php?id=48" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Netatmo Presence Outdoor Camera</div>
            <div class="panel-body">
            <a href="item.php?id=21">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 12";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Netatmo Presence Outdoor Camera
            <a href="item.php?id=21" style="float:right;">Detail...</a>
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
            <div class="panel-heading">Philips Hue Bridge</div>
            <div class="panel-body">
            <a href="item.php?id=22">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 13";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Bridge
            <a href="item.php?id=22" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Bulb</div>
            <div class="panel-body">
            <a href="item.php?id=23">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 14";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Bulb
            <a href="item.php?id=23" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Dimmer Switch</div>
            <div class="panel-body">
            <a href="item.php?id=28">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 15";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Dimmer Switch
            <a href="item.php?id=28" style="float:right;">Detail...</a>
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
            <div class="panel-heading">Philips Hue Lightstrip</div>
            <div class="panel-body">
            <a href="item.php?id=31">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 16";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Lightstrip
            <a href="item.php?id=31" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Go</div>
            <div class="panel-body">
            <a href="item.php?id=24">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 17";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Go
            <a href="item.php?id=24" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Mirror</div>
            <div class="panel-body">
            <a href="item.php?id=30">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 18";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Mirror
            <a href="item.php?id=30" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
      </div>
      <div class="pagination">
        <a href="other.php">&laquo;</a>
        <a class="" href="other.php">1</a>
        <a class="active" href="other2.php">2</a>
        <a class="" href="other3.php">3</a>
        <a class="" href="other4.php">4</a>
        <a class="" href="other3.php">&raquo;</a>
    </div>
    </div><br><br>
<?php
require "footer.php";
?>