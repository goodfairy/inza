<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:13:53
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/blocks/wrappers/mainbox_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d341291798_21332700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b544ed6ef0d2cd9a50c19888917368455df6fa' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/blocks/wrappers/mainbox_general.tpl',
      1 => 1705061594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d341291798_21332700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-container clearfix<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['details_page']->value) {?> details-page<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_general_title_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <h1 class="ty-mainbox-title">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_general_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </h1>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <div class="ty-mainbox-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/mainbox_general.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/mainbox_general.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-container clearfix<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['details_page']->value) {?> details-page<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_general_title_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <h1 class="ty-mainbox-title">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_general_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </h1>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <div class="ty-mainbox-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
}
}
}
