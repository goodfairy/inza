<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:13:23
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/theme_editor/components/fileuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8f3904c77_13723771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5db0f515b3bf1422d1d231a8e3bd403245ec4a' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/theme_editor/components/fileuploader.tpl',
      1 => 1701074534,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8f3904c77_13723771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove_this_item','theme_editor.browse','theme_editor.browse','remove_this_item','theme_editor.browse','theme_editor.browse'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable1);?>

<input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="te-fileuploader clearfix"><div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><p class="cm-fu-file " style="display: none;"><span class="upload-filename filename-link"></span><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>
</p></div><div id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><span class="te-btn ty-left fileinput-btn cm-tooltip disabled" title="<?php echo $_smarty_tpl->__('theme_editor.create_style_first');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-upload ty-icon-upload te-fileuploader__icon"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php } else { ?><span class="te-btn ty-left fileinput-btn"><input type="file" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-upload ty-icon-upload te-fileuploader__icon"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php }?></div></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/theme_editor/components/fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/theme_editor/components/fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable2);?>

<input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="te-fileuploader clearfix"><div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><p class="cm-fu-file " style="display: none;"><span class="upload-filename filename-link"></span><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>
</p></div><div id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><span class="te-btn ty-left fileinput-btn cm-tooltip disabled" title="<?php echo $_smarty_tpl->__('theme_editor.create_style_first');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-upload ty-icon-upload te-fileuploader__icon"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php } else { ?><span class="te-btn ty-left fileinput-btn"><input type="file" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-upload ty-icon-upload te-fileuploader__icon"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php }?></div></div>

<?php }
}
}
