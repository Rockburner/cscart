<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:17:40
         compiled from "/var/www/html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799201263599302843ad743-48649835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e78a3652e696f5cb27efa3a009134db8459e19' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1799201263599302843ad743-48649835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_hide_input' => 0,
    'title' => 0,
    'discussion' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599302843c2488_41637826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599302843c2488_41637826')) {function content_599302843c2488_41637826($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('communication','and','rating','communication','rating','disabled','communication','and','rating','communication','rating','disabled'));
?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['no_hide_input']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
:</label>
    <div class="controls">

        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value) {?>
        <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>
        <?php }?>

        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
[discussion_type]" id="discussion_type">
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>selected="selected"<?php }?> value="B"><?php echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("communication");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R") {?>selected="selected"<?php }?> value="R"><?php echo $_smarty_tpl->__("rating");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D"||!$_smarty_tpl->tpl_vars['discussion']->value) {?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {
echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");
} elseif ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {
echo $_smarty_tpl->__("communication");
} elseif ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R") {
echo $_smarty_tpl->__("rating");
} else {
echo $_smarty_tpl->__("disabled");
}?></span>
        <?php }?>

    </div>
</div><?php }} ?>
