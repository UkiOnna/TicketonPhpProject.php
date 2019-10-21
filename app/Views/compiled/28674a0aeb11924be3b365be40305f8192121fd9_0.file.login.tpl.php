<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-20 13:58:35
  from 'H:\OSPanel\domains\TicketonPhpProject.php\app\Views\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dac3ddbbd4f34_25992340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28674a0aeb11924be3b365be40305f8192121fd9' => 
    array (
      0 => 'H:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\auth\\login.tpl',
      1 => 1571567865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dac3ddbbd4f34_25992340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-3 offset-lg-4 text-center">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value['flashes'], 'flash');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flash']->value) {
?>
                <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['flash']->value['type'];?>
 mb-3">
                    <?php echo $_smarty_tpl->tpl_vars['flash']->value['message'];?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <h3 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

            <form method="post" action="/login">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group m-0">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
