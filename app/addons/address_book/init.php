<?php

if ( !defined('AREA') ) { die('Access denied'); }

fn_register_hooks(
  // this is the only hook I can find that makes any sense to use - it's probably not the right one to use.....
  'get_checkout_payment_buttons_pre'
#  'get_order_data_pre'
);
?>
