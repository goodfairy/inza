<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:53
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/ecl_pages_in_blocks/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8d5f34667_51922227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d5b09f5025dd92b112d66fb28805f62769207e' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/ecl_pages_in_blocks/hooks/index/scripts.post.tpl',
      1 => 1706130451,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8d5f34667_51922227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'addons' && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'manage' && !$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ecl_icon')) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function(){
            $('[id^="addon_ecl_"] .bg-icon').css('background-image', 'url(https://ecom-labs.com/images/ecl_logo.png)').css('background-size', 'cover');
            $('[id^="addon_ecl_"] .bg-icon i').css('display', 'none');
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ecl_icon", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
