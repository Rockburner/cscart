<?php /* Smarty version Smarty-3.1.21, created on 2017-08-15 17:10:13
         compiled from "/var/www/html/design/backend/templates/views/companies/components/company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046515973599300c5674822-00634242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de145a7f2731103b4ca0c9890329c6d3364e0e7' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/company_name.tpl',
      1 => 1502160056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2046515973599300c5674822-00634242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_599300c567ba78_38087183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599300c567ba78_38087183')) {function content_599300c567ba78_38087183($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</small>
    <?php } else { ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</small></p>
    <?php }?>
<?php }?><?php }} ?>
