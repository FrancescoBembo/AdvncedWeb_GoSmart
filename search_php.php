<?php
require "config.php";
require "header.php"; 

if(isset($_POST["search"])){
$search_wd = $_POST["search"];

$sql="SELECT * FROM products WHERE p_name LIKE '%$search_wd%'";

$results= mysqli_query($link,$sql);
echo '
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0" style="font-size: 20px;">Search result</div>
    </div>
  </div>
</div>
';

echo'
<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="row">';

 if(mysqli_num_rows($results) > 0){
    while($row = mysqli_fetch_array($results)){
       $prod_id = $row["p_id"];
       $prod_brand = $row["p_brand"];
       $prod_name = $row["p_name"];
       $prod_price = $row["p_price"];
       $prod_description = $row["p_des"];
       $prod_image = $row["p_image"];
       $prod_link = $row["p_link"];
      echo "
      <div class='col-sm-6 col-lg-4 mb-4' data-aos='zoom-in'>
        <div class='block-4 text-center border'>
          <figure class='block-4-image'>
            <a href='$prod_link'><img src='$prod_image' alt='Image placeholder' class='img-fluid'></a>
          </figure>
          <div class='block-4-text p-4'>
            <h3><a href='$prod_link'>$prod_name</a></h3>
            <p class='mb-0'>$prod_brand</p>
            <p class='text-primary font-weight-bold'>$$prod_price</p>
          </div>
        </div>
        <br><br>    
      </div>
        ";
      }
    }
    echo '
      </div>
    </div>
  </div>
</div>';
}
?>
<?php
require "footer.php";
?>
