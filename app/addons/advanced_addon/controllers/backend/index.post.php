<?php


if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

$viewed_categories = db_get_array('SELECT * FROM ?:advanced_addon_data');

if (!empty($viewed_categories)) {

  foreach($viewed_categories AS $key => $category_data) {

    $category_data['user_name'] = fn_get_user_name($category_data['user_id']);
    $category_data['categories'] = unserialize($category_data['categories']);
    $category_data['categories'] = fn_get_category_name(array_keys($category_data['categories']));

    $viewed_categories[$key] = $category_data;
  }

  Registry::get('view')->assign('viewed_categories',$viewed_categories);
}

?>
