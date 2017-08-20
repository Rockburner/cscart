<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:17:40
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110289063599302843a4aa9-50874052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d99c6659136056f83f1a9eaeebf0c20a763c33' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110289063599302843a4aa9-50874052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599302843aa513_47028005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599302843aa513_47028005')) {function content_599302843aa513_47028005($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
		<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>$_smarty_tpl->__("discussion_title_category")), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
