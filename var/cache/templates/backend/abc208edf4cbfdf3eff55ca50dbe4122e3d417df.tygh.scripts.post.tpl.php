<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 13:19:17
         compiled from "/var/www/html/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7491699725992caa5934147-14526135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abc208edf4cbfdf3eff55ca50dbe4122e3d417df' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7491699725992caa5934147-14526135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5992caa5936ba9_49091464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5992caa5936ba9_49091464')) {function content_5992caa5936ba9_49091464($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('addons.tags.add_a_tag'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
