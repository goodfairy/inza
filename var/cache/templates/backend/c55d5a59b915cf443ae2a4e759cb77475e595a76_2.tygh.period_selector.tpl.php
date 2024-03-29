<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:53:29
  from '/home/c/cw39500/inz/public_html/design/backend/templates/common/period_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9ea994c69d3_48529350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55d5a59b915cf443ae2a4e759cb77475e595a76' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/common/period_selector.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
  ),
),false)) {
function content_65c9ea994c69d3_48529350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates'));
$_smarty_tpl->_assignInScope('id_prefix', uniqid(''));?>

<?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
    <div class="nowrap">
        <div class="form-inline">
<?php } else { ?>
    <div class="sidebar-field">
<?php }?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects"><?php echo $_smarty_tpl->__("period");?>
:</label>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects">
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value == "A" || !$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
            <optgroup label="=============">
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value == "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value == "C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
            </optgroup>
        </select>

        <?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
            &nbsp;&nbsp;
        <?php } else { ?>
            </div>
            <div class="sidebar-field">
        <?php }?>

        <label<?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?> class="label-html"<?php }?>><?php echo $_smarty_tpl->__("select_dates");?>
:</label>

        <?php $_smarty_tpl->_assignInScope('time_from', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from");?>
        <?php $_smarty_tpl->_assignInScope('time_to', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to");?>

        <?php if ($_smarty_tpl->tpl_vars['display']->value == "form") {?>
            <?php $_smarty_tpl->_assignInScope('date_meta', "input-date");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('date_meta', "input-small");?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."f_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_from']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['display']->value == "form") {?>
            -
        <?php } else { ?>
            &nbsp;&nbsp;-&nbsp;&nbsp;
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."t_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_to']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
                </div>
            </div>
        <?php } else { ?>
            </div>
        <?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function() <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
