<?php

if(!defined('BOOTSTRAP')) { die ('Access denied'); }

use Tygh\Registry;

// this hook calls in any extant addresses from the database ready for display on the back end
$addresses = db_get_array('SELECT * FROM ?:address_book_data');

if(!empty($addresses)) {

  Registry::get('view')->assign('addresses',$addresses);
}


?>
