<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:41
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/csc_vertical_menu/components/subcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8c9818290_07661452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1efa343b291b8b9a8280cfa4e503c02631e5ac2' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/csc_vertical_menu/components/subcategory.tpl',
      1 => 1705615447,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/csc_vertical_menu/components/subcategory.tpl' => 3,
  ),
),false)) {
function content_65c9a8c9818290_07661452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('foreach_name', "item_".((string)$_smarty_tpl->tpl_vars['iid']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>hidden_ico sub_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_category_id']->value, ENT_QUOTES, 'UTF-8');
}?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_submenu_elements'], ENT_QUOTES, 'UTF-8');?>
;"><?php $_smarty_tpl->_assignInScope('item_url', fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['category_id'])));?><div class="ty-menu__submenu-item-header"><?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {
$_smarty_tpl->_assignInScope('background', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_elements']);
$_smarty_tpl->_assignInScope('text_color', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['color_text_elements']);
} else {
$_smarty_tpl->_assignInScope('background', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_submenu_elements']);
$_smarty_tpl->_assignInScope('text_color', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['submenu_color_text_elements']);
}?><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link" style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background']->value, ENT_QUOTES, 'UTF-8');?>
;color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_color']->value, ENT_QUOTES, 'UTF-8');?>
;margin-left: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value*20, ENT_QUOTES, 'UTF-8');?>
px;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a><div class="open_ico"><?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['show_product_count']) {?><div class="products_count">&nbsp;<?php echo htmlspecialchars((string) fn_get_category_product_count($_smarty_tpl->tpl_vars['item']->value['category_id']), ENT_QUOTES, 'UTF-8');?>
&nbsp;</div><?php }
if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><span id="open_ico_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_toggle_category(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
)">+</span><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><ul class="subcat"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/csc_vertical_menu/components/subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories",'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'root_category_id'=>$_smarty_tpl->tpl_vars['item']->value['category_id']), 0, true);
?></ul><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_vertical_menu/components/subcategory.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_vertical_menu/components/subcategory.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('foreach_name', "item_".((string)$_smarty_tpl->tpl_vars['iid']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>hidden_ico sub_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_category_id']->value, ENT_QUOTES, 'UTF-8');
}?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_submenu_elements'], ENT_QUOTES, 'UTF-8');?>
;"><?php $_smarty_tpl->_assignInScope('item_url', fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['category_id'])));?><div class="ty-menu__submenu-item-header"><?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {
$_smarty_tpl->_assignInScope('background', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_elements']);
$_smarty_tpl->_assignInScope('text_color', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['color_text_elements']);
} else {
$_smarty_tpl->_assignInScope('background', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_submenu_elements']);
$_smarty_tpl->_assignInScope('text_color', $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['submenu_color_text_elements']);
}?><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link" style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background']->value, ENT_QUOTES, 'UTF-8');?>
;color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_color']->value, ENT_QUOTES, 'UTF-8');?>
;margin-left: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value*20, ENT_QUOTES, 'UTF-8');?>
px;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a><div class="open_ico"><?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['show_product_count']) {?><div class="products_count">&nbsp;<?php echo htmlspecialchars((string) fn_get_category_product_count($_smarty_tpl->tpl_vars['item']->value['category_id']), ENT_QUOTES, 'UTF-8');?>
&nbsp;</div><?php }
if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><span id="open_ico_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" onclick="fn_toggle_category(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
)">+</span><?php }?></div></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><ul class="subcat"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/csc_vertical_menu/components/subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories",'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'root_category_id'=>$_smarty_tpl->tpl_vars['item']->value['category_id']), 0, true);
?></ul><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
