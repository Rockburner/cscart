<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:09:53
         compiled from "/var/www/html/design/themes/responsive/templates/addons/social_buttons/meta_templates/facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342291973599300b144ab57-09082620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e356ea813ff6539988fc8deb1af823311328763' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/social_buttons/meta_templates/facebook.tpl',
      1 => 1502792352,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '342291973599300b144ab57-09082620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'provider_meta_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599300b145a808_62958473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599300b145a808_62958473')) {function content_599300b145a808_62958473($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']) {?>
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['type'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/meta_templates/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/meta_templates/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']) {?>
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['type'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php }?><?php }} ?>
