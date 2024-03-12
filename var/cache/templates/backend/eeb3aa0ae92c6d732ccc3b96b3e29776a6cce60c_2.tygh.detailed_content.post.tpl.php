<?php
/* Smarty version 4.1.1, created on 2024-02-12 15:19:13
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/robokassa/hooks/companies/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ca0cc13e8870_65223840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb3aa0ae92c6d732ccc3b96b3e29776a6cce60c' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/robokassa/hooks/companies/detailed_content.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_65ca0cc13e8870_65223840 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('robokassa.robokassa','robokassa.store_id','robokassa.account_number'));
if ($_smarty_tpl->tpl_vars['is_robokassa_split_used']->value || !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("robokassa.robokassa")), 0, false);
?>
    <div class="control-group">
        <label class="control-label"
               for="elm_robokassa_store_id"
        >
            <?php echo $_smarty_tpl->__("robokassa.store_id");?>
:
        </label>
        <div class="controls">
            <input type="text"
                   name="company_data[robokassa_store_id]"
                   id="elm_robokassa_store_id"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['robokassa_store_id'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"
               for="elm_robokassa_account_number"
        >
            <?php echo $_smarty_tpl->__("robokassa.account_number");?>
:
        </label>
        <div class="controls">
            <input type="text"
                   name="company_data[robokassa_account_number]"
                   id="elm_robokassa_account_number"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['robokassa_account_number'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
    </div>
<?php }
}
}
