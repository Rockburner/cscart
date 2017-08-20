<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:17:40
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10204359885993028446a657-26845507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d22afaf7a5d5ac11e07b60d550ea4016e73f5ed' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10204359885993028446a657-26845507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5993028446d8f9_42451392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993028446d8f9_42451392')) {function content_5993028446d8f9_42451392($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
