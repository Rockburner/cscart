<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:17
         compiled from "/var/www/html/design/backend/templates/common/license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21445228595992caa53159c6-06737450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef8643746239b277e9537dd357b9ca31efd3c22' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/license.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21445228595992caa53159c6-06737450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_mode' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa531fbe4_79682691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa531fbe4_79682691')) {function content_5992caa531fbe4_79682691($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ultimate_license_required','text_ultimate_license_required','text_license_required_storefronts','text_license_required_mobile','upgrade_license'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['store_mode']->value!="ultimate") {?>
    <div id="restriction_promo_dialog" title="<?php echo $_smarty_tpl->__("ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME')));?>
" class="hidden cm-dialog-auto-size">
        <?php echo $_smarty_tpl->__("text_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'),"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url']));?>

        <div class="restriction-features">
            <div class="restriction-feature restriction-feature_storefronts">
                <h2><?php echo $_smarty_tpl->__("text_license_required_storefronts-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_storefronts");?>

            </div>
            <div class="restriction-feature restriction-feature_mobile-app">
                <h2><?php echo $_smarty_tpl->__("text_license_required_mobile-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_mobile");?>

            </div>
        </div>
        <div class="center">
            <a class="restriction-update-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'], ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank"><?php echo $_smarty_tpl->__("upgrade_license");?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
