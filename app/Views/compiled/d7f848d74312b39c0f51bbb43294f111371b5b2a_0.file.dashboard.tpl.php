<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-20 22:38:20
  from 'C:\OSPanel\domains\test\app\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dacb7ac83ed53_98580581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f848d74312b39c0f51bbb43294f111371b5b2a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\app\\Views\\admin\\dashboard.tpl',
      1 => 1571600096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dacb7ac83ed53_98580581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
        <div class="card text-center">
            <div class="card-header">
                <?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>

            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['block']->value['text'];?>
</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['block']->value['link'];?>
" class="btn btn-primary">Открыть</a>
            </div>
            <div class="card-footer text-muted">
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
