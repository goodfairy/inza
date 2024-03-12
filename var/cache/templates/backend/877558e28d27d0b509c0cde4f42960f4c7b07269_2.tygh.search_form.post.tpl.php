<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:54:51
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f8fb4354a5_89062032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877558e28d27d0b509c0cde4f42960f4c7b07269' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9f8fb4354a5_89062032 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }
}
