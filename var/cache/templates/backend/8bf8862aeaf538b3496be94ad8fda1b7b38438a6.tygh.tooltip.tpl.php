<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:40
         compiled from "/var/www/html/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6725059405992cabca9ec88-23805477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf8862aeaf538b3496be94ad8fda1b7b38438a6' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/tooltip.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6725059405992cabca9ec88-23805477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992cabcaa43b7_31378504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992cabcaa43b7_31378504')) {function content_5992cabcaa43b7_31378504($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'ISO-8859-1');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
