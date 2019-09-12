<?php
require "header.php";
?>
  <!--<div id="search_container">
          <input type="text" name="product" id="product" autocomplete="off">
          <div id="results"></div>
        </div>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#product").keyup(function(){
              var query = $(this).val();
              if (query != "") {
                $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {query:query},
                        success: function(data)
                        {
                          $('#results').html(data);
                          $('#results').css('display', 'block');
                            $("#product").focusout(function(){
                                $('#results').css('display', 'none');
                            });
                            $("#product").focusin(function(){
                                $('#results').css('display', 'block');
                            });
                        }
                });
              } else {
                    $('#results').css('display', 'none');
              }
            });
          });
        </script>-->
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW ARRIVAL</div>
            <div class="panel-body">
            <a href="item.php?id=25">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 24";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW ARRIVAL</div>
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
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW ARRIVAL</div>
            <div class="panel-body">
            <a href="item.php?id=52">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 19";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
              ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require "footer.php";
?>