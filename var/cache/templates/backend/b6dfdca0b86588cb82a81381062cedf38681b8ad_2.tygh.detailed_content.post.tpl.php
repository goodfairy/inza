<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:55:17
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f915e93a60_45453410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6dfdca0b86588cb82a81381062cedf38681b8ad' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/social_buttons/common/facebook_types.tpl' => 1,
  ),
),false)) {
function content_65c9f915e93a60_45453410 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0, false);
?>
    <?php }
}
}
}
