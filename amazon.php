<?php
require "header.php";
?>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Dot</div>
            <div class="panel-body">
            <a href="item.php?id=8">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 1";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Dot
            <a href="item.php?id=8" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Show 5</div>
            <div class="panel-body">
            <a href="item.php?id=11">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 2";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Show 5
            <a href="item.php?id=11" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Show</div>
            <div class="panel-body">
            <a href="item.php?id=13">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 3";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Show
            <a href="item.php?id=13" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
      </div><br><br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo</div>
            <div class="panel-body">
            <a href="item.php?id=10">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 4";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo
            <a href="item.php?id=10" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Input</div>
            <div class="panel-body">
            <a href="item.php?id=9">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 5";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Input
            <a href="item.php?id=9" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div><br><br>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Sub</div>
            <div class="panel-body">
            <a href="item.php?id=12">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 6";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Sub
            <a href="item.php?id=12" style="float:right;">Detail...</a>
            </div>
            <button style='float:right;'  class='btn btn-default add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
          </div>
        </div>
      </div>
    </div><br><br>
<?php
require "footer.php";
?>