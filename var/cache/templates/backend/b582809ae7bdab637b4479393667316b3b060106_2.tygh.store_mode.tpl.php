<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:53
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/settings/store_mode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8d5e231b5_10283777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b582809ae7bdab637b4479393667316b3b060106' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/settings/store_mode.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8d5e231b5_10283777 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('store_mode','product_state_description.','license_number','contact_us'));
?>
<div class="hidden" title="<?php echo $_smarty_tpl->__("store_mode");?>
" id="store_mode_dialog">
    <div class="store-mode free-mode">
        <?php echo $_smarty_tpl->__("product_state_description.".((string)$_smarty_tpl->tpl_vars['product_state_suffix']->value));?>


        <?php if ($_smarty_tpl->tpl_vars['store_mode_license']->value) {?>
            <?php echo $_smarty_tpl->__("license_number");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>

        <div class="center">
            <a class="btn btn-primary btn-large" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("contact_us");?>
</a>
        </div>
    </div>
</div>
<?php }
}
