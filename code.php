<?php

/* Hide smart bill dropdown for specific product */
function hide_smart_bill()
{
  $target_product_id = 6983; // Your product ID
  $found = false;
  foreach (WC()->cart->get_cart() as $cart_item) {
    if ($cart_item['product_id'] != $target_product_id) {
      $found = true;
      break;
    }
  }
  if ($found) {
?>
    <style>
      #smartbill_billing_type_field {
        display: none !important;
      }
    </style>
<?php
  }
}

add_action( 'woocommerce_checkout_after_customer_details', 'hide_smart_bill' );
?>

