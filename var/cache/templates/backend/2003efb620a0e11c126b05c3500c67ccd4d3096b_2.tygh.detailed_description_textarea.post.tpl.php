<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:55:17
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f915e5e292_22922573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2003efb620a0e11c126b05c3500c67ccd4d3096b' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9f915e5e292_22922573 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }
}
}
