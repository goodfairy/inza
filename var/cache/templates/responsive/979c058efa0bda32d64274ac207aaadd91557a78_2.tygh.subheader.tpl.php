<?php
/* Smarty version 4.1.1, created on 2024-02-12 15:47:13
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/common/subheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ca1351034cb4_61082296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '979c058efa0bda32d64274ac207aaadd91557a78' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/common/subheader.tpl',
      1 => 1705061594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 2,
  ),
),false)) {
function content_65ca1351034cb4_61082296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><h3 class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? "ty-subheader" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value,'params'=>"ty-subheader__tooltip"), 0, false);
?>
    <?php }?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/subheader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/subheader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><h3 class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? "ty-subheader" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value,'params'=>"ty-subheader__tooltip"), 0, true);
?>
    <?php }?>
</h3><?php }
}
}
