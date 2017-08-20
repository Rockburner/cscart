<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:08:51
         compiled from "/var/www/html/design/backend/templates/addons/advanced_addon/hooks/index/index.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91455401559930073eaf500-20203506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9963769ae0f2486027cd06363994c6a8e261b1d8' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/advanced_addon/hooks/index/index.post.tpl',
      1 => 1502805491,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91455401559930073eaf500-20203506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewed_categories' => 0,
    'category_data' => 0,
    'category_id' => 0,
    'category_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59930073eb8aa8_01167629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59930073eb8aa8_01167629')) {function content_59930073eb8aa8_01167629($_smarty_tpl) {?><div class="statistics-box">
  <div class="statistics-body">
    <p class="strong">Viewed Categories</p>
    <div class="clear">
      <?php if ($_smarty_tpl->tpl_vars['viewed_categories']->value) {?>
        <ul>
          <?php  $_smarty_tpl->tpl_vars["category_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viewed_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_data"]->key => $_smarty_tpl->tpl_vars["category_data"]->value) {
$_smarty_tpl->tpl_vars["category_data"]->_loop = true;
?>
          <li><strong><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=`?category_data.user_id`"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['user_name'], ENT_QUOTES, 'ISO-8859-1');?>
</a></strong>:&nbsp;
            <?php  $_smarty_tpl->tpl_vars["category_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["category_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category_data']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_name"]->key => $_smarty_tpl->tpl_vars["category_name"]->value) {
$_smarty_tpl->tpl_vars["category_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["category_id"]->value = $_smarty_tpl->tpl_vars["category_name"]->key;
?>
              <a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>,
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
      <?php } else { ?>
        <ul>
          <li>No Data found</li>
        </ul>
      <?php }?>
    </div>
  </div>
</div>
<?php }} ?>
