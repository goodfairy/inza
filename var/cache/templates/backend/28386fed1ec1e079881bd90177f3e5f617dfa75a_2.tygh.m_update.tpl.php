<?php
/* Smarty version 4.1.1, created on 2024-03-02 23:05:04
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/products/m_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65e38670cbd366_53341428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28386fed1ec1e079881bd90177f3e5f617dfa75a' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/products/m_update.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/calendar.tpl' => 6,
    'tygh:views/localizations/components/select.tpl' => 4,
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/attach_images.tpl' => 2,
    'tygh:views/products/components/products_m_update_features.tpl' => 2,
    'tygh:common/select_usergroups.tpl' => 2,
    'tygh:views/products/components/products_m_update_company.tpl' => 2,
    'tygh:common/image.tpl' => 1,
    'tygh:common/select2/categories.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_65e38670cbd366_53341428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('override_product_data','vendor','track','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','apply','vendor','track','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','update_products'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {

    function getFieldType(element) {
        if ($(element).is('input[type=radio], input[type=checkbox], select')) {
            return 'elm-disabled';
        } else if ($(element).is('div')){
            return '';
        } else {
            return 'input-text-disabled';
        }
    }

    $(document).ready(function(){
        $(_.doc).on('click', '[id*=elements-switcher-]', function(){
            var id = $(this).prop('id');
            var id_template = /elements-switcher-(\S+)/i;
            id = 'field_' + id.match(id_template)[1];

            var checked = $(this).prop('checked');
            $('[id*=' + id + ']').each(function(index, element){
                $el = $(element);
                $el.toggleClass(getFieldType(element), !checked);
                $el.prop('disabled', !checked);
                if (!checked) {
                    $el.prop('checked', false);
                }
            });
            $('#' + id + ' .correct-picker-but input').prop('disabled', !checked);
            $('#' + id + ' .correct-picker-but a').toggle(checked);
        });

        $('[id*=field_] .correct-picker-but a').hide();

        // Double scroll
        var elm_orig = $("#scrolled_div");
        var elm_scroller = $("#scrolled_div_top");

        var dummy = $("<div></div>");
        dummy.width(elm_orig.get(0).scrollWidth);
        dummy.height(24);
        elm_scroller.append(dummy);

        elm_scroller.scroll(function(){
            elm_orig.scrollLeft(elm_scroller.scrollLeft());
        });
        elm_orig.scroll(function(){
            elm_scroller.scrollLeft(elm_orig.scrollLeft());
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_tools", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("override_product_data"),'but_onclick'=>"Tygh."."$"."('#override_box').toggle()",'but_role'=>"tool"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="override_box" class="hidden">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="override_form" class="form-horizontal form-edit products-update" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_url("products.m_update"), ENT_QUOTES, 'UTF-8');?>
" />

<div class="table-wrapper">
    <table class="products-update__table">
    <tr>
        <td>
            <div class="scroll-x scroll-border">
            <table class="table-fixed table--relative">
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filled_groups']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <th>&nbsp;</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_names']->value, 'field_name', false, 'field_key');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['field_key']->value == "company_id") {?>
                <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                <?php } else { ?>
                <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');
}?></th>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            <tr >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filled_groups']->value, 'v', false, 'type');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['type']->value != "L" || $_smarty_tpl->tpl_vars['type']->value == "L" && $_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value], 'name', false, 'field');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                    <tr>
                        <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value == "product") {?>strong<?php }?>"><label class="checkbox" for="elements-switcher-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__"><input type="checkbox" name="" id="elements-switcher-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" value="Y" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</label></td>
                        <td valign="top" class="pad">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == "A") {?>
                            <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value="" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "B") {?>
                            <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value=""  size="3" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "C") {?>
                            <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__h" type="hidden" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" disabled="disabled" />
                            <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="checkbox" class="elm-disabled" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "D") {?>
                            <textarea id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="3" cols="40" disabled="disabled"></textarea>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "S") {?>
                            <select id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value['variants'], 'v_name', false, 'v_id');
$_smarty_tpl->tpl_vars['v_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v_id']->value => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value);?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "T") {?>
                                <div class="correct-picker-but">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value == "timestamp") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(defined('TIME') ? constant('TIME') : null),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0, true);
?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "avail_since") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(defined('TIME') ? constant('TIME') : null),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0, true);
?>
                                <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "L") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_div'=>true,'disabled'=>true,'id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__",'data_name'=>"override_products_data[localization]"), 0, true);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "E") {?>                             <div class="clear" id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__">
                                <div class="correct-picker-but">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"categories",'input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[category_ids]",'radio_input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[main_category]",'item_ids'=>'','hide_link'=>true,'display_input_id'=>"category_ids",'view_mode'=>"list"), 0, true);
?>
                                </div>
                            </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "W") {?>                                 <select id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']), 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } else { ?>                                 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_types"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_types"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_types"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php }?>
                </td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_names']->value, 'v', false, 'field');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['field']->value != "localization" || $_smarty_tpl->tpl_vars['field']->value == "localization" && $_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table class="no-border">
                    <tr>
                        <td valign="top" class="pad"><?php if ($_smarty_tpl->tpl_vars['field']->value != "main_pair" && $_smarty_tpl->tpl_vars['field']->value != "features") {?><input type="checkbox" name="" value="Y" id="elements-switcher-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" /><?php } else { ?>&nbsp;<?php }?></td>
                        <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value == "main_pair") {?>
                            <table width="420">
                            <tr>
                                <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"product_main",'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0, true);
?></td>
                            </tr>
                            </table>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "tracking") {?>
                            <select    id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("track");?>
</option>
                                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "zero_price_action") {?>
                            <select id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" name="override_products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" class="elm-disabled" disabled="disabled">
                                <option value="R"><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                                <option value="P"><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                                <option value="A"><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "taxes") {?>
                            <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__h" type="hidden" name="override_products_data[tax_ids]" value="" disabled="disabled" />
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                            <div class="select-field nowrap no-padding">
                                <label class="checkbox" for="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="override_products_data[tax_ids][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "features") {?>
                            <?php if ($_smarty_tpl->tpl_vars['all_product_features']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_m_update_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['all_product_features']->value,'features_search'=>$_smarty_tpl->tpl_vars['all_features_search']->value,'product_id'=>0,'over'=>true,'data_name'=>"override_products_data"), 0, true);
?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "timestamp") {?>
                            <div class="correct-picker-but">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value),'date_name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(defined('TIME') ? constant('TIME') : null),'extra'=>" disabled=\"disabled\"",'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "localization") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "usergroup_ids") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."_",'name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>'','input_extra'=>" disabled=\"disabled\"",'list_mode'=>true), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "company_id") {?>
                            <div class="clear" id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__">
                                <div class="correct-picker-but">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('override_box'=>"Y"), 0, true);
?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_fields_inner"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_fields_inner"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <input id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
__" type="text" value="" name="override_products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" disabled="disabled" />
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_fields_inner"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                        </td>
                    </tr>
                    </table>
                <?php }?>
                </td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            </table>
            </div>
        </td>
    </tr>
    </table>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("apply"),'but_name'=>"dispatch[products.m_override]",'but_role'=>"button_main"), 0, true);
?>
</div>

</form>
</div>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="products_m_update_form" class="products-update" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_url("products.m_update"), ENT_QUOTES, 'UTF-8');?>
" />

<div class="table-wrapper">
    <table class="products-update__table">
    <tr>
        <td>

            <div id="scrolled_div_top" class="scroll-x scroll-top"></div>
            <div id="scrolled_div" class="scroll-x scroll-border">
            <table class="table-fixed table--relative">
            <tr>
                <th>&nbsp;</th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filled_groups']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <th>&nbsp;</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_names']->value, 'field_name', false, 'field_key');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['field_key']->value == "company_id") {?>
                <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                <?php } else { ?>
                <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');
}?></th>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_data']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr >
                <td valign="top" class="nowrap pad products-list__image">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0, true);
?>
                </td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filled_groups']->value, 'v', false, 'type');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['type']->value != "L" || $_smarty_tpl->tpl_vars['type']->value == "L" && $_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table class="no-border">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value], 'name', false, 'field');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_fields_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_fields_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <tr>
                        <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value == "product") {?>strong<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                        <td valign="top" class="pad nowrap">
                            <?php if ($_smarty_tpl->tpl_vars['field']->value == "price" || $_smarty_tpl->tpl_vars['field']->value == "list_price") {?>
                                <input type="text"
                                       value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"
                                       class="input-medium"
                                       size="5"
                                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                       <?php if ($_smarty_tpl->tpl_vars['readonly_fields']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['field']->value]) {?>
                                           readonly="readonly"
                                       <?php }?>
                                />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "A") {?>
                                <input
                                    type="text"
                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
"
                                    class="input-medium"
                                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value == "product_code") {?>
                                        maxlength="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFieldsLength::PRODUCT_CODE"), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['readonly_fields']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['field']->value]) {?>
                                        readonly="readonly"
                                    <?php }?>
                                />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "B") {?>
                                <input type="text"
                                       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                       class="input-medium"
                                       size="5"
                                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                       <?php if ($_smarty_tpl->tpl_vars['readonly_fields']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['field']->value]) {?>
                                           readonly="readonly"
                                       <?php }?>
                                />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "C") {?>
                                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                                <input type="checkbox"
                                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                       value="Y"
                                       <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value] == "Y") {?>
                                           checked="checked"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->tpl_vars['readonly_fields']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['field']->value]) {?>
                                           readonly="readonly"
                                       <?php }?>
                                />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "D") {?>
                                <textarea class="input-xlarge"
                                          name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                          rows="3"
                                          cols="40"
                                          <?php if ($_smarty_tpl->tpl_vars['readonly_fields']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['field']->value]) {?>
                                              readonly="readonly"
                                          <?php }?>
                                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "S") {?>
                                <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value['variants'], 'v_name', false, 'v_id');
$_smarty_tpl->tpl_vars['v_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v_id']->value => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value['skip_lang']) {?>
                                            <?php $_smarty_tpl->_assignInScope('option_name', $_smarty_tpl->tpl_vars['v_name']->value);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('option_name', $_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value));?>
                                        <?php }?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value] == $_smarty_tpl->tpl_vars['v_id']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "T") {?>
                                <div class="correct-picker-but">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value == "timestamp") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"date_timestamp_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "avail_since") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"date_avail_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>
                                <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "L") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_div'=>true,'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization'],'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]"), 0, true);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "E") {?>                                 <?php $_smarty_tpl->_subTemplateRender("tygh:common/select2/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select2_tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'select2_multiple'=>true,'select2_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][category_ids]",'select2_allow_sorting'=>"true",'select2_category_ids'=>$_smarty_tpl->tpl_vars['product']->value['category_ids'],'select2_main_category'=>$_smarty_tpl->tpl_vars['product']->value['main_category'],'categories_data'=>$_smarty_tpl->tpl_vars['categories_data']->value,'disable_categories'=>true,'select2_select_id'=>"categories_add_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'select2_wrapper_meta'=>"form-inline object-categories-add--fix-width",'select2_width'=>"100%",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'is_multiple_update'=>true), 0, true);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "W") {?>                                 <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']), 'item', false, 'layout');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['product']->value['details_layout'] == $_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } else { ?>                                 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_types_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_types_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_types_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        </td>
                    </tr>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_fields_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php }?>
                </td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_names']->value, 'v', false, 'field');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value != "product_id" && ($_smarty_tpl->tpl_vars['field']->value != "localization" || $_smarty_tpl->tpl_vars['field']->value == "localization" && $_smarty_tpl->tpl_vars['localizations']->value)) {?>
                <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value == "main_pair") {?>
                            <table width="420"><tr><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"product_main",'image_key'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_pair'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0, true);
?></td></tr></table>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "tracking") {?>
                            <select name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking'] != smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track");?>
</option>
                                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "zero_price_action") {?>
                            <select name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                <option value="R" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "taxes") {?>
                            <input type="hidden" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids]" value="" />
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                            <div class="select-field nowrap">
                                <label class="checkbox" for="products_taxes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="products_taxes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['product']->value['tax_ids'])) {?>checked="checked"<?php }?>  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "features") {?>
                            <?php if ($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']]) {?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_m_update_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']],'features_search'=>$_smarty_tpl->tpl_vars['features_search']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]"), 0, true);
?>

                            <input type="hidden" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][features_exist]" value="Y" />
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "timestamp") {?>
                            <div class="correct-picker-but">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"prod_date",'date_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "localization") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "usergroup_ids") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"product_ug_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>$_smarty_tpl->tpl_vars['product']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>true), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value == "company_id") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_fields_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_fields_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_fields_inner_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" />
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_fields_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                </td>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            </div>
        </td>
    </tr>
    </table>
</div>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"products_m_update_form"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("update_products"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'extra_tools'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_tools'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
