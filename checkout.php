<?php
require "header.php";
?>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            echo '<br>';
        } else {
            echo '
            <div class="border p-4 rounded" role="alert">
            Returning customer? <a href="login.php">Click here</a> to login
            </div>';
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">Billing Details</h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group">
            <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
            <select id="c_country" class="form-control">
              <option value="1">Select a country</option>
              <option value="2">Australia</option>    
              <option value="3">Hong Kong</option> 
              <option value="4">Italy</option>  
            </select>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="c_fname">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="c_lname">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_companyname" class="text-black">Company Name </label>
              <input type="text" class="form-control" id="c_companyname" name="c_companyname">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_state_country" name="c_state_country">
            </div>
            <div class="col-md-6">
              <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-6">
              <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_email_address" name="c_email_address">
            </div>
            <div class="col-md-6">
              <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
            </div>
          </div>

          <div class="form-group">
            <label for="c_order_notes" class="text-black">Order Notes</label>
            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
          </div>

        </div>
      </div>
      <div class="col-md-6">

        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Coupon Code</h2>
            <div class="p-3 p-lg-5 border">
              
              <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
              <div class="input-group w-75">
                <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                </div>
              </div>

            </div>
          </div>
        </div>
        <?php
        if(isset($_SESSION["cart_item"])){
        ?>
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Your Order</h2>
            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>Product</th>
                  <th>Total</th>
                </thead>
                <tbody>
                <?php		
                foreach ($_SESSION["cart_item"] as $item){
                    $item_price = $item["quantity"]*$item["p_price"];
                    $total_price += ($item["p_price"]*$item["quantity"]);
                ?>
                  <tr>
                    <td><?php echo $item["p_name"]; ?> <strong class="mx-2">x</strong> <?php echo $item["quantity"]; ?></td>
                    <td><?php echo "$ ".$item["p_price"]; ?></td>
                  </tr>
                <?php
                }
                ?>
                <tr>
                    <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                    <td class="text-black"><?php echo "$ ".number_format($total_price, 2); ?></td>
                  </tr>
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                    <td class="text-black font-weight-bold"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
                  </tr>
                </tbody>
              </table>

              <div class="form-group">
                <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'">Place Order</button>
                <?php unset($_SESSION["cart_item"]); ?>
              </div>

            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
    <!-- </form> -->
  </div>
</div>
<?php
require "footer.php";
?>