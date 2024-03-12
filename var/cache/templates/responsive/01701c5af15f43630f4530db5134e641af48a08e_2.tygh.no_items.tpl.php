<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:35:44
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/common/no_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d8605c1225_02241879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01701c5af15f43630f4530db5134e641af48a08e' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/common/no_items.tpl',
      1 => 1705061594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d8605c1225_02241879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('object_not_found','text_nothing_found','reset','object_not_found','text_nothing_found','reset'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['reset_url']->value) {?>
    <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('text_no_found', $_smarty_tpl->__("object_not_found",array("[object]"=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value))));
} elseif (!$_smarty_tpl->tpl_vars['text_no_found']->value) {?>
    <?php $_smarty_tpl->_assignInScope('text_no_found', $_smarty_tpl->__("text_nothing_found"));
}?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>ty-no-items--extended<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_items_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['text_no_found']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['reset_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/no_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/no_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['reset_url']->value) {?>
    <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('text_no_found', $_smarty_tpl->__("object_not_found",array("[object]"=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value))));
} elseif (!$_smarty_tpl->tpl_vars['text_no_found']->value) {?>
    <?php $_smarty_tpl->_assignInScope('text_no_found', $_smarty_tpl->__("text_nothing_found"));
}?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>ty-no-items--extended<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_items_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['text_no_found']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['reset_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
    <?php }?>
</div>
<?php }
}
}
