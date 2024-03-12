<?php
/* Smarty version 4.1.1, created on 2024-02-12 15:19:13
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/storefronts/components/languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ca0cc130b5e8_61581145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3792541f2b3995d4cd86777ad209fb3ab05813' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/storefronts/components/languages.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/adaptive_object_selection.tpl' => 1,
  ),
),false)) {
function content_65ca0cc130b5e8_61581145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('languages'));
?>

<div class="control-group">
    <label for="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("languages");?>

    </label>
    <div class="controls" id="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"storefront_data[languages]",'input_id'=>"storefront_language",'item_ids'=>$_smarty_tpl->tpl_vars['all_language_ids']->value,'items'=>$_smarty_tpl->tpl_vars['all_languages']->value,'id_field'=>"lang_id",'name_field'=>"name",'storefront_id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>"languages",'load_items_url'=>"languages.selector?storefront_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class_prefix'=>"localization",'close_on_select'=>"false"), 0, false);
?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['language']->value['lang_id'],$_smarty_tpl->tpl_vars['all_language_ids']->value)) {?>
                    <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<?php }
}
