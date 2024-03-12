<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:16:33
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9e1f1b98179_31156470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c8b5b0a28502056a39e65cdf7fae8851f0f815' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl',
      1 => 1705062458,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
),false)) {
function content_65c9e1f1b98179_31156470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.with_photo','product_reviews.with_photo'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","with_images"));?>

        <?php $_smarty_tpl->_assignInScope('product_reviews_with_images', ($_smarty_tpl->tpl_vars['_REQUEST']->value['with_images'] === "1"));?>
    
    <nav class="ty-product-review-reviews-navigation">

        <?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->tpl_vars['product_reviews_sorting']->value,'sorting_orders'=>$_smarty_tpl->tpl_vars['product_reviews_sorting_orders']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value,'avail_sorting'=>$_smarty_tpl->tpl_vars['product_reviews_avail_sorting']->value,'ajax_class'=>"cm-ajax",'pagination_id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value)), 0, false);
?>

        <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
            <input id="product_review_with_images"
                type="checkbox"
                name="product_review_with_images"
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>checked="checked"<?php }?>
                class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>
                    ty-product-review-reviews-navigation__filter-checkbox--active
                <?php }?>
                "
                data-ca-external-click-id="product_review_with_images_link"
            >
            <a id="product_review_with_images_link"
                href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {
echo "0";
} else {
echo "1";
}
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['curl']->value,"with_images=".$_prefixVariable1."&selected_section=product_reviews")), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="pagination_contents_comments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("product_reviews.with_photo");?>

            </a>
        </label>

    </nav>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","with_images"));?>

        <?php $_smarty_tpl->_assignInScope('product_reviews_with_images', ($_smarty_tpl->tpl_vars['_REQUEST']->value['with_images'] === "1"));?>
    
    <nav class="ty-product-review-reviews-navigation">

        <?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->tpl_vars['product_reviews_sorting']->value,'sorting_orders'=>$_smarty_tpl->tpl_vars['product_reviews_sorting_orders']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value,'avail_sorting'=>$_smarty_tpl->tpl_vars['product_reviews_avail_sorting']->value,'ajax_class'=>"cm-ajax",'pagination_id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value)), 0, true);
?>

        <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
            <input id="product_review_with_images"
                type="checkbox"
                name="product_review_with_images"
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>checked="checked"<?php }?>
                class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>
                    ty-product-review-reviews-navigation__filter-checkbox--active
                <?php }?>
                "
                data-ca-external-click-id="product_review_with_images_link"
            >
            <a id="product_review_with_images_link"
                href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {
echo "0";
} else {
echo "1";
}
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['curl']->value,"with_images=".$_prefixVariable2."&selected_section=product_reviews")), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="pagination_contents_comments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("product_reviews.with_photo");?>

            </a>
        </label>

    </nav>
<?php }
}
}
}
