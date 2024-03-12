<?php
/* Smarty version 4.1.1, created on 2024-02-15 10:03:44
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/views/profiles/components/profiles_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65cdb750645084_47168610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c870d25bae19412b1123eb3d3a018e20ec2af31a' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/views/profiles/components/profiles_account.tpl',
      1 => 1705061594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_65cdb750645084_47168610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('user_account_info','email','password','confirm_password','user_account_info','email','password','confirm_password'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("user_account_info")), 0, false);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-control-group">
        <label for="email" class="ty-control-group__title cm-required cm-email cm-trim"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
    </div>

    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profiles_account.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profiles_account.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("user_account_info")), 0, true);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:account_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:account_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-control-group">
        <label for="email" class="ty-control-group__title cm-required cm-email cm-trim"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
    </div>

    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:account_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
