<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:41
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/csc_vertical_menu/blocks/vertical_menu_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8c97edbb1_31244462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef239331f02dddd0d2e82c4bbba42994f0707adf' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/csc_vertical_menu/blocks/vertical_menu_block.tpl',
      1 => 1705615447,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/csc_vertical_menu/components/subcategory.tpl' => 2,
  ),
),false)) {
function content_65c9a8c97edbb1_31244462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('menu','menu'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-menu ty-menu-vertical">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone">
            <a class="ty-menu__item-link">
                <i class="ty-icon-short-list"></i>
                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php $_smarty_tpl->_assignInScope('foreach_name', "item_".((string)$_smarty_tpl->tpl_vars['iid']->value));
$_smarty_tpl->_subTemplateRender("tygh:addons/csc_vertical_menu/components/subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0, false);
?>

        <style>
            .open_ico {
                float: right;
                color: white;
                left: -22px;
                top: -35px;
                position: relative;
                font-size: 18px;
                margin-bottom: -24px;
                cursor: pointer;
            }
            .hidden_ico {
                display:none !important;
            }
            .products_count {
                float: left;
                background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['color_text_elements'], ENT_QUOTES, 'UTF-8');?>
;
                color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_elements'], ENT_QUOTES, 'UTF-8');?>
;
                margin-top: 3px;
                margin-right: 4px;
                border-radius: 7px;
            }
        </style>

        <?php echo '<script'; ?>
>
            function fn_toggle_category(category_id)
            {
                if ($('.sub_' + category_id).is(':visible'))
                {
                    $('.sub_' + category_id).addClass('hidden_ico');
                    $('#open_ico_' + category_id).html('+');
                }
                else
                {
                    $('.sub_' + category_id).removeClass('hidden_ico');
                    $('#open_ico_' + category_id).html('&nbsp-');
                }
            }
        <?php echo '</script'; ?>
>
    </ul>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_vertical_menu/blocks/vertical_menu_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_vertical_menu/blocks/vertical_menu_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-menu ty-menu-vertical">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone">
            <a class="ty-menu__item-link">
                <i class="ty-icon-short-list"></i>
                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php $_smarty_tpl->_assignInScope('foreach_name', "item_".((string)$_smarty_tpl->tpl_vars['iid']->value));
$_smarty_tpl->_subTemplateRender("tygh:addons/csc_vertical_menu/components/subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0, true);
?>

        <style>
            .open_ico {
                float: right;
                color: white;
                left: -22px;
                top: -35px;
                position: relative;
                font-size: 18px;
                margin-bottom: -24px;
                cursor: pointer;
            }
            .hidden_ico {
                display:none !important;
            }
            .products_count {
                float: left;
                background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['color_text_elements'], ENT_QUOTES, 'UTF-8');?>
;
                color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['csc_vertical_menu']['background_elements'], ENT_QUOTES, 'UTF-8');?>
;
                margin-top: 3px;
                margin-right: 4px;
                border-radius: 7px;
            }
        </style>

        <?php echo '<script'; ?>
>
            function fn_toggle_category(category_id)
            {
                if ($('.sub_' + category_id).is(':visible'))
                {
                    $('.sub_' + category_id).addClass('hidden_ico');
                    $('#open_ico_' + category_id).html('+');
                }
                else
                {
                    $('.sub_' + category_id).removeClass('hidden_ico');
                    $('#open_ico_' + category_id).html('&nbsp-');
                }
            }
        <?php echo '</script'; ?>
>
    </ul>
</div><?php }
}
}
