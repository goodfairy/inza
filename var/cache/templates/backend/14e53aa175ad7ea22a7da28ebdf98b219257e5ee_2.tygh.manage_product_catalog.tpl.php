<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/onboarding_guide/steps/manage_product_catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666b7c364_10056539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e53aa175ad7ea22a7da28ebdf98b219257e5ee' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/onboarding_guide/steps/manage_product_catalog.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d666b7c364_10056539 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_manage_products_description','onboarding_guide.manage_products_description','onboarding_guide.add_one_product','onboarding_guide.import_csv_or_xml','onboarding_guide.view_product_page_description','onboarding_guide.premoderation','onboarding_guide.view_product_page'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text">
    <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
      <?php echo $_smarty_tpl->__("onboarding_guide.sb_manage_products_description");?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->__("onboarding_guide.manage_products_description");?>

    <?php }?>
  </span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 <?php if (!$_smarty_tpl->tpl_vars['data']->value['products_available']) {?>og-step-complete<?php }?>">
  <a href="<?php ob_start();
if ((empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {
echo "onboarding_guide.open_vendor_panel?redirect=";
}
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) fn_url($_prefixVariable3."products.add"), ENT_QUOTES, 'UTF-8');?>
"
     class="button button-primary" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.add_one_product");?>
 ↗</a>
  <a href="<?php ob_start();
if ((empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {
echo "onboarding_guide.open_vendor_panel?redirect=";
echo htmlspecialchars((string) urlencode("import_presets.add&object_type=products"), ENT_QUOTES, 'UTF-8');
} else {
echo "import_presets.add&object_type=products";
}
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string) fn_url($_prefixVariable4), ENT_QUOTES, 'UTF-8');?>
"
     class="button button-secondary" data-og-action="edit_structure" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.import_csv_or_xml");?>
 ↗</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['products_available']) {?>
  <div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.view_product_page_description");?>
</span>
  </div>

  <div class="onboarding_section__action_block onboarding_content_margin--bottom og-step-complete">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.preview_last_product"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary cm-tooltip" target="_blank"
       <?php if ((empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>title="<?php echo htmlspecialchars((string) htmlspecialchars_decode($_smarty_tpl->__("onboarding_guide.premoderation"), ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->__("onboarding_guide.view_product_page");?>
 ↗</a>
  </div>
<?php }
}
}
