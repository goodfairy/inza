<?php
/* Smarty version 4.1.1, created on 2024-02-12 15:20:13
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ca0cfdb2a412_65733509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9be375547c17b797c4827532d02e4258be1270' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl',
      1 => 1705062458,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca0cfdb2a412_65733509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] && floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name'] && $_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
            <div itemprop="review" itemscope itemtype="http://schema.org/Review">
                <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                    <meta itemprop="bestRating" content="5" />
                </div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] && floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name'] && $_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
            <div itemprop="review" itemscope itemtype="http://schema.org/Review">
                <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                    <meta itemprop="bestRating" content="5" />
                </div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
