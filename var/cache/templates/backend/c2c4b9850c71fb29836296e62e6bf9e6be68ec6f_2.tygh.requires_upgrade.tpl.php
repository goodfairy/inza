<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:24:47
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/addons/components/notification/requires_upgrade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d5cfb1da63_84147334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c4b9850c71fb29836296e62e6bf9e6be68ec6f' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/addons/components/notification/requires_upgrade.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_65c9d5cfb1da63_84147334 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('requires_upgrade','new_add_on_is_not_compatible_with_your_product','upgrade_and_update_addon'));
if ($_smarty_tpl->tpl_vars['actual_change_log']->value && $_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility'] !== true) {?>
    <div class="alert alert-block">
        <h4>
            <?php echo $_smarty_tpl->__("requires_upgrade",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

        </h4>

        <p>
            <?php echo $_smarty_tpl->__("new_add_on_is_not_compatible_with_your_product",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>

        </p>
        <p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"upgrade_center.manage",'but_role'=>"action",'but_meta'=>"btn-primary",'but_text'=>$_smarty_tpl->__("upgrade_and_update_addon",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)))), 0, false);
?>
        </p>
    </div>
<?php }
}
}
