<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}

}
?>

<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>


<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>
<div class="col-md-12 mb-4">
  <div class="product-item">
    <div class="row align-items-center no-gutters">
      <div class="item_img d-none d-sm-block">
        <a href="product.php?item=<?php echo $product["code"]; ?>">
          <img class="checkout-order-img img bl-3 text-primary" src="<?php echo $product["image"]; ?>" alt="Product Image">
        </a>
      </div>
      <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
        <a href="product.php?item=<?php echo $product["code"]; ?>">
          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1"><?php echo $product["name"]; ?></h6>
        </a>
      </div>
      <?php if ($itemdiscount != 0) { ?>
      <div class="item_discount d-none d-sm-block">
        <div class="row align-items-center h-100 no-gutters">
          <div class="text-right text-secondary px-6">
            <span class="fw-600 btn bg-success"><?php echo $itemdiscount; ?>% OFF</span>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php if ($itemdiscounted == 1) { ?>
      <div class="item_price d-none d-sm-block">
        <div class="row align-items-center h-100 no-gutters">
          <div class="text-right">
            <span class="fw-600 td-lt"><?php echo $itemregprice; ?></span><br>
            <span class="fw-600">$<?php echo $itemdicountprice; ?></span>
          </div>
        </div>
      </div>
      <?php } else { ?>
      <div class="item_price d-none d-sm-block">
        <div class="row align-items-center h-100 no-gutters">
          <div class="text-right">
            <span class="fw-600"><?php echo $itemregprice; ?></span><br>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="pl-4">
        <div class="row align-items-center h-100 no-gutters">
          <div class="text-right lead-2">
            <a href="inc/editcart.php?item=<?php echo $itemnumber; ?>&cartid=<?php echo $_SESSION['accountid']; ?>&remove=true" class="ti-trash text-success"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>

<?php
}else{
echo "<h3>Your cart is empty!</h3>";
}
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
