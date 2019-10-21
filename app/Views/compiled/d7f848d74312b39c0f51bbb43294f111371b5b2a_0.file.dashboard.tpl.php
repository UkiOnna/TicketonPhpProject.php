<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-20 22:51:25
  from 'C:\OSPanel\domains\test\app\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dacbabd27db38_52017967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f848d74312b39c0f51bbb43294f111371b5b2a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\app\\Views\\admin\\dashboard.tpl',
      1 => 1571601083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dacbabd27db38_52017967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
<div class="col-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['block']->value['text'];?>
</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['block']->value['link'];?>
" class="btn btn-info">Открыть</a>
            </div>
        </div>
</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
