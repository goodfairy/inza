<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:54:06
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f8ce47ee66_07669511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd6e77a6ada34ca462b647f7a31dd060a14a36f' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9f8ce47ee66_07669511 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }
}
}
