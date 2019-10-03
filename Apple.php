<?php
require "header.php";
?>
  <div class="container">
      <div class="row mb-5">
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
          </div>
        </div><br><br>
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
          </div>
        </div><br><br>
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
          </div>
        </div>
      </div>
    </div><br><br>
<?php
require "footer.php";
?>