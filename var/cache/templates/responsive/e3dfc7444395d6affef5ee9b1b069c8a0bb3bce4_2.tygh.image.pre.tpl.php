<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:41
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/hidpi/hooks/common/image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8c93d1a60_61958776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3dfc7444395d6affef5ee9b1b069c8a0bb3bce4' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1705062458,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8c93d1a60_61958776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['images']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php } else { ?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hidpi/hooks/common/image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hidpi/hooks/common/image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['images']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php } else { ?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
}
}
}
