<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:29:44
         compiled from "/var/www/html/design/backend/templates/addons/paypal/settings/logo_uploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090085675992cd183fa9a4-58090976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0a51f561d3cf4d1f7c20dc6f189ec329ef499e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/paypal/settings/logo_uploader.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1090085675992cd183fa9a4-58090976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'pp_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992cd1840e1f2_85662073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992cd1840e1f2_85662073')) {function content_5992cd1840e1f2_85662073($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('paypal_logo','ttc_paypal_logo'));
?>
<div id="paypal_logo_uploader" class="in collapse<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_allowed_for('MULTIVENDOR')&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?> disable-overlay-wrap<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_allowed_for('MULTIVENDOR')&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <div class="disable-overlay" id="pp_logo_disable_overlay"></div>
    <?php }?>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_logo"><?php echo $_smarty_tpl->__("paypal_logo");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_paypal_logo")), 0);?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"paypal_logo",'image_object_type'=>"paypal_logo",'image_pair'=>$_smarty_tpl->tpl_vars['pp_settings']->value['main_pair'],'no_thumbnail'=>true), 0);?>

            <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="right update-for-all">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>"pp_settings",'name'=>"pp_settings[pp_logo_update_all_vendors]",'hide_element'=>"paypal_logo_uploader"), 0);?>

            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function(){
    var $ = Tygh.$;
    $('.cm-update-for-all-icon[data-ca-hide-id=paypal_logo_uploader]').on('click', function() {
        $('#paypal_logo_uploader').toggleClass('disable-overlay-wrap');
        $('#pp_logo_disable_overlay').toggleClass('disable-overlay');
    });
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
