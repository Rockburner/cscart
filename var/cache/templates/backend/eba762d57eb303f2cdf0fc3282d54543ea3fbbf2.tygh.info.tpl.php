<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:14
         compiled from "/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17450524835992caa2bed9e9-79477427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba762d57eb303f2cdf0fc3282d54543ea3fbbf2' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17450524835992caa2bed9e9-79477427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa2c16931_48890215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa2c16931_48890215')) {function content_5992caa2c16931_48890215($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
    </div>

</div><?php }} ?>
