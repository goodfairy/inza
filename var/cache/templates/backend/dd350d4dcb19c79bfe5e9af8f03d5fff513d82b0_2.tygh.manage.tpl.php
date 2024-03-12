<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:42
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/file_editor/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d67e0363d5_03729121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd350d4dcb19c79bfe5e9af8f03d5fff513d82b0' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/file_editor/manage.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_65c9d67e0363d5_03729121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_editor'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->_assignInScope('container_id', (($tmp = $_REQUEST['container_id'] ?? null)===null||$tmp==='' ? "elfinder" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('available_languages', array("de","ar","bg","ca","cs","da","el","es","fa","fo","fr_CA","fr","he","hr","hu","id","it","ja","ko","nl","no","pl","pt_BR","ro","ru","si","sk","sl","sr","sv","tr","ug_CN","uk","vi","zh_CN","zh_TW"));?>
    <?php if ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null) === "pt") {?>
        <?php $_smarty_tpl->_assignInScope('transform_lang_code', "pt_BR");?>
    <?php } elseif ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null) === "ug") {?>
        <?php $_smarty_tpl->_assignInScope('transform_lang_code', "ug_CN");?>
    <?php } elseif ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null) === "zh") {?>
        <?php $_smarty_tpl->_assignInScope('transform_lang_code', "zh_CN");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('transform_lang_code', (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null));?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function(_, $) {
        $.getScript('js/lib/elfinder/js/elfinder.min.js')
            .done(function () {
                $.loadCss(['js/lib/elfinder/css/elfinder.min.css']);
                $.loadCss(['js/lib/elfinder/css/theme.css']);

                <?php if ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null) !== 'en' && smarty_modifier_in_array($_smarty_tpl->tpl_vars['transform_lang_code']->value,$_smarty_tpl->tpl_vars['available_languages']->value)) {?>
		    $.getScript('js/lib/elfinder/js/i18n/elfinder.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['transform_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
.js')
			.then(null, function() { return $.getScript('js/lib/elfinder/js/i18n/elfinder.LANG.js'); })
			.done(fn_init_elfinder);
                <?php } else { ?>
                    fn_init_elfinder();
                <?php }?>
            });

        function fn_init_elfinder() {
            var w = $.getWindowSizes();
            var options = $.extend(_.fileManagerOptions, {
                url: fn_url('elf_connector.manage?start_path=<?php echo htmlspecialchars((string) $_REQUEST['path'], ENT_QUOTES, 'UTF-8');?>
&security_hash=' + _.security_hash),
                height: w.view_height - 190
            });
            $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
').elfinder(options);
        }
    }(Tygh, Tygh.$))
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_REQUEST['in_popup']) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title'=>$_smarty_tpl->__("file_editor"),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left"), 0, false);
}
}
}
