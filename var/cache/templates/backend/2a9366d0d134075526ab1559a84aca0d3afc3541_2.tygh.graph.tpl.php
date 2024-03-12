<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666d3c159_44240560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a9366d0d134075526ab1559a84aca0d3afc3541' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d666d3c159_44240560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("previous_period"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("current_period"), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlspecialchars((string) mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
