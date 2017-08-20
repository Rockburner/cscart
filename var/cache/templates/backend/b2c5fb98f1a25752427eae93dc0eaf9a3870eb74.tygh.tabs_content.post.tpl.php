<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:17:40
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1183319328599302843fa201-85364715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c5fb98f1a25752427eae93dc0eaf9a3870eb74' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1183319328599302843fa201-85364715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599302843fd323_28837656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599302843fd323_28837656')) {function content_599302843fd323_28837656($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
