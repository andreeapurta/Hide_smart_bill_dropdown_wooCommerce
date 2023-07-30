<?php

/* Hide smart bill dropdown for specific product */
function hide_postal_code_field_css()
{
  $target_product_id = 6983; // Your product ID
  $product_found = false;
  foreach (WC()->cart->get_cart() as $cart_item) {
    if ($cart_item['product_id'] != $target_product_id) {
      $product_found = true;
      break;
    }
  }
  if ($product_found) {
?>
    <style>
      #smartbill_billing_type_field {
        display: none !important;
      }
    </style>
<?php
  }
}
?>