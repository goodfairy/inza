<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:26
  from '/home/c/cw39500/inz/public_html/design/backend/templates/buttons/multiple_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9ead239b543_86778683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afcdd72c6ebe204395d3711809b434305f014d4f' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/buttons/multiple_buttons.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/add_empty_item.tpl' => 1,
    'tygh:buttons/clone_item.tpl' => 1,
    'tygh:buttons/remove_item.tpl' => 1,
  ),
),false)) {
function content_65c9ead239b543_86778683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('tag_level', (($tmp = $_smarty_tpl->tpl_vars['tag_level']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?><div class="btn-group"><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0, false);
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?></div><?php }
}
}