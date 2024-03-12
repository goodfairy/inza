<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:59
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/products/components/search_product_subscribers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eaf3c7f746_28109258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873543d1fe965abe40fa1cdfd90a6a119b9f07e6' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/products/components/search_product_subscribers.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
    'tygh:common/section.tpl' => 1,
  ),
),false)) {
function content_65c9eaf3c7f746_28109258 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('email'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "section", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="form-inline" name="subscribers_search_form" method="get">
	<input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="selected_section" value="subscribers" />
    <input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <div class="input-append shift-left">
    <input type="text" name="email" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" placeholder="<?php echo $_smarty_tpl->__("email");?>
" />
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'section')), 0, false);
}
}
