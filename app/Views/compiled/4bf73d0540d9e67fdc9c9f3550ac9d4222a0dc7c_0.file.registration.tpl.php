<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-17 18:35:56
  from 'C:\OSPanel\domains\TicketonPhpProject.php\app\Views\auth\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5da88a5c2b2bc3_17089280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf73d0540d9e67fdc9c9f3550ac9d4222a0dc7c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\auth\\registration.tpl',
      1 => 1571326201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/Head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5da88a5c2b2bc3_17089280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

            <form method="post" action="/auth/registration/">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group mb-2">
                    <input name="name" type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group m-0">
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
