<?php
require "header.php";
?>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> About Us</strong></div>';
        } else {
          echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> About Us</strong></div>';
        }
        ?>
        </div>
    </div>
</div>
<?php
$sql = "SELECT * FROM image WHERE image_id = 11";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?> 
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-3" style="color:black">About Us</h2>
      </div>
      <div class="col-md-6" data-aos="fade-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="<?php echo $row['image'] ?>" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<?php
require "footer.php";
?>