<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:14
         compiled from "/var/www/html/design/backend/templates/buttons/update_for_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18699528415992caa2d79644-47648510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca31c5f1f2b509a5ef1701ab3a4da3818bfb2905' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/update_for_all.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18699528415992caa2d79644-47648510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'hide_element' => 0,
    'settings' => 0,
    'title_act' => 0,
    'title_dis' => 0,
    'runtime' => 0,
    'visible' => 0,
    'meta' => 0,
    'title' => 0,
    'object_id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa2d89dc0_36659110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa2d89dc0_36659110')) {function content_5992caa2d89dc0_36659110($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('update_for_all_hid_act','update_for_all_hid_dis','update_for_all_act','update_for_all_dis'));
?>
<?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_dis"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_dis"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']=='active') {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_act']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("visible", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_dis']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("hidden", null, 0);?>
    <?php }?>

    <a class="cm-update-for-all-icon icon-group cm-tooltip <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visible']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-title-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_act']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-title-disabled="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_dis']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-disable-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>data-ca-hide-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_element']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>></a>
    <input type="hidden" class="cm-no-hide-input" id="hidden_update_all_vendors_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']=='not_active'&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>disabled="disabled"<?php }?> />
<?php }?>
<?php }} ?>