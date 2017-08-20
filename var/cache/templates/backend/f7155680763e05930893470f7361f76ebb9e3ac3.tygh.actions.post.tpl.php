<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:17
         compiled from "/var/www/html/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19346330605992caa561a028-09843349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7155680763e05930893470f7361f76ebb9e3ac3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19346330605992caa561a028-09843349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa5626e11_62985574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa5626e11_62985574')) {function content_5992caa5626e11_62985574($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
