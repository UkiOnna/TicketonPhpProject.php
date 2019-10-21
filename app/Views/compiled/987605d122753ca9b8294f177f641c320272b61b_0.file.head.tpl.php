<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 17:01:18
  from 'C:\OSPanel\domains\TicketonPhpProject.php\app\Views\manager\blocks\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dadba2e5e1bb0_14387584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '987605d122753ca9b8294f177f641c320272b61b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\manager\\blocks\\head.tpl',
      1 => 1571666475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
  ),
),false)) {
function content_5dadba2e5e1bb0_14387584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value['flashes'], 'flash');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flash']->value) {
?>

        <div class="mb-3 alert alert-<?php echo $_smarty_tpl->tpl_vars['flash']->value['type'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['flash']->value['message'];?>

        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
