<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:53:29
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9ea994a3245_87280910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022c24c26b7c3558fcfebd0c16f7b53e72fa0fab' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9ea994a3245_87280910 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }
}
