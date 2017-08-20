<?php /* Smarty version Smarty-3.1.21, created on 2017-08-20 18:39:15
         compiled from "/var/www/html/design/backend/templates/views/auth/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12069201245999ad23b48967-48978019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d3e35c79fa2c9e3a7bebf8e17ded94e63aa02a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/auth/login_form.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12069201245999ad23b48967-48978019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stored_user_login' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5999ad23b6ab07_89266137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5999ad23b6ab07_89266137')) {function content_5999ad23b6ab07_89266137($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('administration_panel','email','password','forgot_password_question'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="main_login_form" class=" cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="cm-trim cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'ISO-8859-1');
}?>" class="cm-focus" tabindex="1">
            </div>
            <div class="control-group">
                <label for="password" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                <input type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'ISO-8859-1');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'ISO-8859-1');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
        </div>
    </form>
</div><?php }} ?>
