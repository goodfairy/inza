<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:42
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/ecl_pages_in_blocks/blocks/pages/pages_in_blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8ca02ccd0_37516046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea4e0ebf0923ca7c1795e38dcacc2b1ff840d33' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/ecl_pages_in_blocks/blocks/pages/pages_in_blocks.tpl',
      1 => 1706130451,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8ca02ccd0_37516046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div id="pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page', false, NULL, 'block_pages', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['total'];
if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['items']->value) != 1 || $_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null) || $_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?>
<p>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
		<?php $_smarty_tpl->_assignInScope('href', fn_url($_smarty_tpl->tpl_vars['page']->value['link']));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('href', fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])));?>
	<?php }?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "attributes", null, null);?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?> 
			class="cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "F") {?> cm-dialog-auto-width<?php }?> strong" 
			id="opener_page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" 
			data-ca-target-id="page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"
			rel="nofollow"
		<?php } else { ?>
			class="strong"
			<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?>
				target="_blank"
			<?php }?>
		<?php }?>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'attributes');?>
><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
</strong></a>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] != 'Y' && $_smarty_tpl->tpl_vars['page']->value['page_type'] != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {
$_smarty_tpl->_assignInScope('display_button_block', false);?> <p>
	<div class="wysiwyg-content">
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

		<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>
</p>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?>
	 <div id="page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last'] : null)) {?><p><hr/></p><?php }?> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function(_, $) {
	$(document).ready(function(){
		$('.ty-captcha__input', '#pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
').css('margin-bottom', '10px').css('width', '100%');		
		$('.buttons-container', '#pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
').removeClass('buttons-container').addClass('ty-right');
	});
}(Tygh, Tygh.$));
//]]>
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ecl_pages_in_blocks/blocks/pages/pages_in_blocks.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ecl_pages_in_blocks/blocks/pages/pages_in_blocks.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div id="pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'page', false, NULL, 'block_pages', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['total'];
if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['items']->value) != 1 || $_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null) || $_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?>
<p>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
		<?php $_smarty_tpl->_assignInScope('href', fn_url($_smarty_tpl->tpl_vars['page']->value['link']));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('href', fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])));?>
	<?php }?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "attributes", null, null);?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?> 
			class="cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "F") {?> cm-dialog-auto-width<?php }?> strong" 
			id="opener_page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" 
			data-ca-target-id="page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"
			rel="nofollow"
		<?php } else { ?>
			class="strong"
			<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?>
				target="_blank"
			<?php }?>
		<?php }?>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'attributes');?>
><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
</strong></a>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] != 'Y' && $_smarty_tpl->tpl_vars['page']->value['page_type'] != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {
$_smarty_tpl->_assignInScope('display_button_block', false);?> <p>
	<div class="wysiwyg-content">
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

		<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>
</p>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['page']->value['show_in_popup'] == 'Y') {?>
	 <div id="page_tl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block_pages']->value['last'] : null)) {?><p><hr/></p><?php }?> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function(_, $) {
	$(document).ready(function(){
		$('.ty-captcha__input', '#pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
').css('margin-bottom', '10px').css('width', '100%');		
		$('.buttons-container', '#pages_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
').removeClass('buttons-container').addClass('ty-right');
	});
}(Tygh, Tygh.$));
//]]>
<?php echo '</script'; ?>
><?php }
}
}
