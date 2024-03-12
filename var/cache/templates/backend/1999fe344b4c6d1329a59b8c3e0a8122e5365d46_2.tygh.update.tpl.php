<?php
/* Smarty version 4.1.1, created on 2024-02-27 15:54:36
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/sitemap/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65dddb8c8dd4a4_81631294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1999fe344b4c6d1329a59b8c3e0a8122e5365d46' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/sitemap/update.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 2,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_65dddb8c8dd4a4_81631294 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('general','section_links','name','position_short','name','url','position_short','name','url','tools','position_short','name','url','tools'));
if ($_smarty_tpl->tpl_vars['section']->value['section_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['section']->value['section_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="links_form" class="form-horizontal form-edit">
    <input type="hidden" name="section_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <li id="tab_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("section_links");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="hidden" id="content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="control-group">
                <label for="section_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                <div class="controls">
                    <input type="text" name="section" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value['section'], ENT_QUOTES, 'UTF-8');?>
" id="section_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"status",'id'=>"section_status",'obj'=>$_smarty_tpl->tpl_vars['section']->value), 0, false);
?>
    </div>

    <div id="content_tab_links_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative hidden-inputs table-responsive">
            <thead>
                <tr>
                    <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="30%"><?php echo $_smarty_tpl->__("url");?>
</th>
                    <th width="10%">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link', false, 'keys', 'fe_v', array (
));
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keys']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="link_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="2" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden"></td>
                <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <input type="hidden" name="link_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="text" name="link_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link]" size="25" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="input-xlarge input-hidden"></td>
                <td data-th="<?php echo $_smarty_tpl->__("url");?>
">
                    <input type="text" name="link_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link_href]" size="35" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link_href'], ENT_QUOTES, 'UTF-8');?>
" class="input-xlarge input-hidden"></td>
                <td class="right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>"Y"), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr id="box_add_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="add_link_data[0][position]" size="2" value="" class="input-micro"></td>
                <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <input type="hidden" name="add_link_data[0][link_id]" value="0" />
                    <input type="text" name="add_link_data[0][link]" size="25" value="" class="ïnput-xlarge"></td>
                <td data-th="<?php echo $_smarty_tpl->__("url");?>
">
                    <input type="text" name="add_link_data[0][link_href]" size="35" value="" class="ïnput-xlarge"></td>
                <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_link_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, true);
?>
                </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[sitemap.update_sitemap]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
    </div>

    </form>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
