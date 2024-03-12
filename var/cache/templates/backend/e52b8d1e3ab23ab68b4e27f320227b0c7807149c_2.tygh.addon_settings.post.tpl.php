<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:24:47
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d5cfc4b981_53773095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52b8d1e3ab23ab68b4e27f320227b0c7807149c' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d5cfc4b981_53773095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
