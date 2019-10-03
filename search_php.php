<?php
require "config.php";
require "header.php"; 

if(isset($_POST["search"])){
$search_wd = $_POST["search"];

$sql="SELECT * FROM products WHERE p_name LIKE '%$search_wd%'";

$results= mysqli_query($link,$sql);
echo'
<div class="container">
<div class="row mb-5">';
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
      
      <div class='col-sm-4'>
        <div class='panel panel-default'>
            <div class='panel-heading'>$prod_name</div>
            <div class='panel-body'><a href='$prod_link' pid='$prod_id' id='$prod_id'><img src='$prod_image' class='img-thumbnail'></a></div>
            <div class='panel-heading'>$$prod_price</div>
        </div>
        <br><br>    
        </div>
        ";
      }
    }
    echo '
    </div>
    </div>
    <br><br>';
}
?>
<?php
require "footer.php";
?>
