<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:42
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8ca6e6458_11656864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0aa194220d76d7c690110cd1c2b7b4ef2f9118d' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1705062458,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8ca6e6458_11656864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal.paypal_cookie_title','paypal.paypal_cookie_description','paypal.paypal_cookie_title','paypal.paypal_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/paypal/in_context_checkout.js",'cookie-name'=>"paypal"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "paypal.paypal_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("paypal.paypal_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "paypal.paypal_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("paypal.paypal_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/paypal/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/paypal/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/paypal/in_context_checkout.js",'cookie-name'=>"paypal"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "paypal.paypal_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("paypal.paypal_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "paypal.paypal_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("paypal.paypal_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
