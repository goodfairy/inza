<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:55:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f916007778_76631906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1f25be7a6f2250d2a205960119080832ec572a' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_65c9f916007778_76631906 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0, false);
}
}
}
