<?php

if(!defined('BOOTSTRAP')) { die ('Access denied'); }

use Tygh\Registry;

// this hook calls in any extant addresses from the database ready for display on the back end
$addresses = db_get_array('SELECT * FROM ?:address_book_data');

if(!empty($addresses)) {

  Registry::get('view')->assign('addresses',$addresses);
}

// I assume that I can somehow take 'post' data here in order to see if the add new address form has been utilised
// If so, then we would take in the posted new address data, and push it into the database record.
// 
// similarly it should be possible to some pick up an edit request for an existing address from a 'get'request maybe and then pull that address record from the db table and assign to a different variable via the Registry::get('view')->assign and then have the address form pre-populated maybe. Not sure if CS-Cart would usually handle that via javascript or not.
// 
// Similarly there would be a method for deleting an address, although it may well be worth not enabling this (or having an option in the add-on settings for allowing address deletion), so that the address that an old order was sent to can't be deleted and can therefore be referred to later.
// 
// 
?>
