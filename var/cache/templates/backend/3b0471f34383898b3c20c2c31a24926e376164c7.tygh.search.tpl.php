<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:10:13
         compiled from "/var/www/html/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097245628599300c55b4876-32407325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b0471f34383898b3c20c2c31a24926e376164c7' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/search.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2097245628599300c55b4876-32407325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599300c55b6f05_35247152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599300c55b6f05_35247152')) {function content_599300c55b6f05_35247152($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
