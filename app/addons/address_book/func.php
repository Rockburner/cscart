<?php

if(!defined('AREA')) { die ('access denied'); }



function fn_address_book_get_checkout_payment_buttons_pre($cart,$cart_products,$auth,$checkout_buttons) 
{

  $auth = $_SESSION['auth'];

  // check use is in customer area
  
  if(!empty($auth['user_id'] && AREA == 'C') {

    // get the addresses
    $addresses = db_get_array('SELECT * from?:address_book_data WHERE status = $s','active');

    // if we have addresses do something.
    
    if($addresses) {

      // do something to the addresses here before setting them up for display to the user via a template
    }


  }

}

/*
// this function is supposed to integrate with the checkout page and create some means of displaying the addresses as options which can then be chosen by the user and added to the order data
// trying to figure out what hook to use
function fn_address_book_get_order_data_pre() 
{

  $auth = $_SESSION['auth'];

// check user is in customer area

  if(!empty($auth['user_id']) && AREA == 'C') {


  // get the addresses
    $addresses = db_get_array('SELECT * from ?:address_book_data WHERE status = $s','active');

//    if($addresses) {

//   }

  }
}
*/

?>