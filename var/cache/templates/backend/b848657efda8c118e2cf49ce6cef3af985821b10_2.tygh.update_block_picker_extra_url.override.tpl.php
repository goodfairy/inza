<?php
/* Smarty version 4.1.1, created on 2024-02-27 23:36:38
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65de47d63d9245_68403431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b848657efda8c118e2cf49ce6cef3af985821b10' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de47d63d9245_68403431 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'] == "pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((string) (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}
