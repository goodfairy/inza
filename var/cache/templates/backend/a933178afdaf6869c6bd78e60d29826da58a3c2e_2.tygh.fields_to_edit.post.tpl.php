<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:54:06
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f8ce4844c7_09349007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a933178afdaf6869c6bd78e60d29826da58a3c2e' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9f8ce4844c7_09349007 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }
}
