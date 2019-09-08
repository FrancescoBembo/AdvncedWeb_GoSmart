<?php
  $connect = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
  if (isset($_POST['query'])) {
    $search_query = $_POST['query'];
    
  
    $query = "SELECT * FROM products WHERE p_name LIKE '%$search_query%'";
    $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0) {
   while ($products_row = mysqli_fetch_array($result)) {
    echo $products_row['p_name']."<br/>";
    }
} else {
  echo "<p style='color:red'>Product not found...</p>";
}
}
?>