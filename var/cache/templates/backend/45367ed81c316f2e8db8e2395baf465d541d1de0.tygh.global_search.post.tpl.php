<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:17
         compiled from "/var/www/html/design/backend/templates/addons/mobile_admin_app/hooks/index/global_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12024002765992caa58007f2-81145673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45367ed81c316f2e8db8e2395baf465d541d1de0' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/mobile_admin_app/hooks/index/global_search.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12024002765992caa58007f2-81145673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa58049e9_51408725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa58049e9_51408725')) {function content_5992caa58049e9_51408725($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('twgadmin_mobile_app'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['twigmo']['admin_connection']['access_id']) {?>

    <div class="twg-mobile-app-link">
        <a href="<?php echo htmlspecialchars(fn_url("twigmo_admin_app.view"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("twgadmin_mobile_app");?>
</a>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $(document).ready(function() {
                $('div.twg-mobile-app-link').detach().insertBefore('ul.nav.hover-show.nav-pills').show();
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?><?php }} ?>
