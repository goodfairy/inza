<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:51:45
  from '/home/c/cw39500/inz/public_html/design/backend/templates/components/context_menu/context_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9dc21f21b14_15017902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea08aed9a0ecbd9d62318fc21032df100992a24' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/components/context_menu/context_menu.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9dc21f21b14_15017902 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->tpl_vars['context_menu_items']->value) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['status_selector']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statuses'=>$_smarty_tpl->tpl_vars['status_selector']->value->getStatuses(),'elms_container'=>$_smarty_tpl->tpl_vars['context_menu_id']->value), 0, true);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['context_menu_items']->value, 'item', false, 'item_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'data'=>$_smarty_tpl->tpl_vars['item']->value->getData()), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

</div>
<?php }
}
