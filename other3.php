<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Motion Sensor</div>
            <div class="panel-body">
            <a href="item.php?id=25">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 19";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Motion Sensor
            <a href="item.php?id=25" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</a>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Philips Hue Tap Switch</div>
            <div class="panel-body">
            <a href="item.php?id=27">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 20";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Philips Hue Tap Switch
            <a href="item.php?id=27" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Ring Spotlight (2packs)</div>
            <div class="panel-body">
            <a href="item.php?id=19">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 21";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Ring Spotlight (2packs)
            <a href="item.php?id=19" style="float:right;">Detail...</a>
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
            <div class="panel-heading">Ring Spotlight</div>
            <div class="panel-body">
            <a href="item.php?id=20">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 22";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Ring Spotlight
            <a href="item.php?id=20" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Ring Video Doorbell</div>
            <div class="panel-body">
            <a href="item.php?id=37">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 23";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Ring Video Doorbell
            <a href="item.php?id=37" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Schlage Connect Smart Deadbolt</div>
            <div class="panel-body">
            <a href="item.php?id=50">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 24";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Schlage Connect Smart Deadbolt
            <a href="item.php?id=50" style="float:right;">Detail...</a>
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
            <div class="panel-heading">Sensibo AC Wifi Controller</div>
            <div class="panel-body">
            <a href="item.php?id=49">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 25";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Sensibo AC Wifi Controller
            <a href="item.php?id=49" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">TP-Link Smart Plug</div>
            <div class="panel-body">
            <a href="item.php?id=46">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 26";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">TP-Link Smart Plug
            <a href="item.php?id=46" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Yale Assure Lock Keyed Digital Deadbolt</div>
            <div class="panel-body">
            <a href="item.php?id=51">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 27";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
            <div class="panel-footer">Yale Assure Lock Keyed Digital Deadbolt
            <a href="item.php?id=51" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
      </div>
      <div class="pagination">
        <a href="other2.php">&laquo;</a>
        <a class="" href="other.php">1</a>
        <a class="" href="other2.php">2</a>
        <a class="active" href="other3.php">3</a>
        <a class="" href="other4.php">4</a>
        <a class="" href="other4.php">&raquo;</a>
    </div>
    </div><br><br>
<?php
require "footer.php";
?>